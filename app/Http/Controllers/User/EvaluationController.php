<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Material;
use App\Models\Evaluation;

class EvaluationController extends Controller
{
    private $view;
    private $route;
    private $material;
    private $evaluation;
    public function __construct(){
        $this->view = "pages.user.evaluation.";
        $this->route = "evaluation.";
        $this->material = new Material();
        $this->evaluation = new Evaluation();
    }

    public function index(){
        return view($this->view.'index');
    }

    public function pretest(){
        return view($this->view.'pretest',[
        ]);
    }
    public function posttest(){
        return view($this->view.'posttest',[
        ]);
    }

    public function game(){
        return view($this->view.'game',[
        ]);
    }
    public function game2(){
        return view($this->view.'game2',[
        ]);
    }
}
