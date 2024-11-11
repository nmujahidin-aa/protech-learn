<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\UserTest;

class GradeController extends Controller
{
    private $view;
    private $route;
    private $grade;
    private $user;
    public function __construct(){
        $this->view = "pages.admin.grade.";
        $this->route = "dashboard.grade.";
        $this->grade = new UserTest();
        $this->user = new User();
    }

    public function index()
    {
        // Retrieve all test records with user data
        $testData = $this->grade::with('user')->get();

        // Initialize an empty array to store organized data
        $grades = [];

        // Loop through each test entry
        foreach ($testData as $test) {
            $userId = $test->user_id;

            // Initialize user's entry if it doesn't exist
            if (!isset($grades[$userId])) {
                $grades[$userId] = [
                    'name' => $test->user->name,
                    'pre_1' => '-', 'pre_2' => '-', 'pre_3' => '-', 'pre_4' => '-',
                    'post_1' => '-', 'post_2' => '-', 'post_3' => '-', 'post_4' => '-'
                ];
            }

            // Assign the score based on the packet type
            if ($test->packet == 'pre_1') $grades[$userId]['pre_1'] = $test->score;
            elseif ($test->packet == 'pre_2') $grades[$userId]['pre_2'] = $test->score;
            elseif ($test->packet == 'pre_3') $grades[$userId]['pre_3'] = $test->score;
            elseif ($test->packet == 'pre_4') $grades[$userId]['pre_4'] = $test->score;
            elseif ($test->packet == 'post_1') $grades[$userId]['post_1'] = $test->score;
            elseif ($test->packet == 'post_2') $grades[$userId]['post_2'] = $test->score;
            elseif ($test->packet == 'post_3') $grades[$userId]['post_3'] = $test->score;
            elseif ($test->packet == 'post_4') $grades[$userId]['post_4'] = $test->score;
        }

        // Pass the organized data to the view
        return view($this->view."index", ['grades' => $grades]);
    }
}

