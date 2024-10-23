<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Question;

class EvaluationController extends Controller
{
    private $view;
    private $route;
    public function __construct(){
        $this->view = "pages.admin.evaluation.";
        $this->route = "evaluation.";
    }
    public function index(){
        $pretestCounts = [];
        $posttestCounts = [];

        for ($i = 1; $i <= 4; $i++) {
            $pretestCounts[$i] = Question::where('packet', 'pre_' . $i)->count();
            $posttestCounts[$i] = Question::where('packet', 'post_' . $i)->count();
        }

        return view($this->view.'index', compact('pretestCounts', 'posttestCounts'));
    }
}
