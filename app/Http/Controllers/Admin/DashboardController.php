<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Team;
use App\Models\Material;

class DashboardController extends Controller
{
    private $view;
    private $user;
    private $team;
    private $material;
    public function __construct(){
        $this->view = "pages.admin.dashboard.";
        $this->user = new User();
        $this->team = new Team();
        $this->material = new Material();
    }
    public function index(){
        $user = $this->user->all();
        $team = $this->team->all();
        $material = $this->material->all();

        return view($this->view."index",[
            'user' => $user,
            'team' => $team,
            'material' => $material,
        ]);
    }
}
