<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\UserTest;
use App\Models\UserAnswer;

class PosttestController extends Controller
{
    private $view;
    private $route;
    public function __construct(){
        $this->route = "evaluation.posttest.";
        $this->view = "pages.user.evaluation.posttest.";
    }

    public function index($id, $questionNumber = 1){
        $packet = "post_".$id;
        $existingPostTest = UserTest::where('user_id', auth()->id())->where('packet', $packet)->exists();

        if ($existingPostTest) {
            return redirect()->route($this->route.'result', $id);
        }
        return view($this->view.'index',[
            'id' => $id,
            'questionNumber' => $questionNumber,
        ]);
    }

    public function show($id, $questionNumber = 1){
        $packet = "post_".$id;
        $questions = Question::where('packet', $packet)->get();

        if ($questionNumber > $questions->count()) {
            return redirect()->route($this->route.'result', $id);
        }

        $question = $questions[$questionNumber - 1];
        return view($this->view.'show',[
            'id' => $id,
            'question' => $question,
            'questions' => $questions,
            'questionNumber' => $questionNumber,
        ]);
    }

    public function saveAnswer(Request $request){
        $answers = session('answers', []);
        $answers[$request->question_number] = $request->answer;
        session(['answers' => $answers]);

        $questionNumber = $request->question_number;
        $id = $request->input('id');
        $packet = "post_".$id;
        $questions = Question::where('packet', $packet)->get();
        if ($request->has('previous')) {
            $nextQuestionNumber = max(1, $questionNumber - 1);
        } else {
            $nextQuestionNumber = $questionNumber + 1;
        }

        if ($nextQuestionNumber > $questions->count()) {
            return redirect()->route($this->route.'submit');
        } else {
            return redirect()->route($this->route.'show', ['id'=>$id, 'questionNumber' => $nextQuestionNumber]);
        }
    }

    public function submit(Request $request){
        $answers = session('answers', []);
        $answers[$request->question_number] = $request->answer;
        session(['answers' => $answers]);

        // Ensure answers are still in session after this point
        $answers = session('answers', []);
        $questions = Question::where('packet', "post_".$request->input('id'))->get();
        $unansweredQuestions = [];

        // Ensure $questions is limited to the current packet
        $packet = "post_".$request->input('id');
        foreach ($questions as $index => $question) {
            if (!isset($answers[$index + 1])) {
                $unansweredQuestions[] = $index + 1;
            }
        }

        // Redirect back if any unanswered questions exist
        if (count($unansweredQuestions) > 0) {
            return redirect()->route($this->route.'show', ['id' => $request->input('id'), 'questionNumber' => min($unansweredQuestions)])
                ->with('alert', 'Soal nomor ' . implode(', ', $unansweredQuestions) . ' belum dijawab');
        }

        // Calculate score
        $score = 0;
        $userTest = UserTest::create([
            'user_id' => auth()->id(),
            'packet' => $packet,
            'score' => $score
        ]);

        // Save answers
        foreach ($answers as $questionNumber => $answer) {
            $questionIndex = $questionNumber - 1;
            if ($questionIndex >= 0 && $questionIndex < $questions->count()) {
                $question = $questions[$questionIndex];
                $isCorrect = $question->correct_answer == $answer;
                // Increment score for correct answers
                if ($isCorrect) {
                    $score += 10;
                }



                // Store user answers
                UserAnswer::create([
                    'user_test_id' => $userTest->id,
                    'question_id' => $question->id,
                    'answer' => $answer,
                    'is_correct' => $isCorrect
                ]);
            }
        }

        // Update score and clear session
        $userTest->update(['score' => $score]);
        session()->forget('answers');

        return redirect()->route($this->route.'result', $request->input('id'));
    }


    public function result($id){
        $packet = "post_".$id;
        if(UserTest::where('user_id', auth()->id())->where('packet', $packet)->latest()->first() == null){
            return redirect()->route($this->route.'index', $id);
        }
        $packet = "post_".$id;
        $userTest = UserTest::where('user_id', auth()->id())
            ->where('packet', $packet)
            ->first();
        $userAnswers = UserAnswer::where('user_test_id', $userTest->id)->get();
        $correctAnswersCount = $userAnswers->where('is_correct', true)->count();
        return view($this->view.'result',[
            'id' => $id,
            'userTest' => $userTest,
            'userAnswers' => $userAnswers,
            'correctAnswersCount' => $correctAnswersCount,
        ]);
    }
}
