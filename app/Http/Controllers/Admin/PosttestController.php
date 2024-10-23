<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Question;
use App\Http\Requests\Admin\QuestionRequest;

class PosttestController extends Controller
{
    private $view;
    private $route;
    public function __construct(){
        $this->view = "pages.admin.evaluation.posttest.";
        $this->route = "dashboard.evaluation.posttest.";
    }

    public function posttest($id){
        $packet = 'post_' . $id;
        $questions = Question::where('packet', $packet)->get();
        return view($this->view.'index', [
            'id' => $id,
            'questions' => $questions,
        ]);
    }

    public function editPosttest(string $id = null, string $ids = null){
        $questions = Question::find($ids);
        $id = request('id');
        return view($this->view.'edit', [
            'questions' => $questions,
            'id' => $id,
        ]);
    }

    public function storePosttest(QuestionRequest $request){
        $packet = str_replace('post_', '', $request->packet);
        if ($request->has('id')) {
            $question = Question::findOrFail($request->id);
            $question->update($request->validated());
            alert()->html('Berhasil','Data berhasil diperbarui','success');
            return redirect()->route($this->route.'index', ['id' => $packet]);
        } else {
            Question::create($request->validated());
            alert()->html('Berhasil','Data berhasil ditambahkan','success');
            return redirect()->route($this->route.'index', ['id' => $packet]);
        }
    }

    public function deletePosttest(){
        $id = request('id');
        Question::find($id)->delete();
        return redirect()->back()->with('success', 'Soal berhasil dihapus');
    }
}
