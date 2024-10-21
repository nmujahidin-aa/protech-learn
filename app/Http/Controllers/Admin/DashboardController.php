<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    private $view;
    public function __construct(){
        $this->view = "pages.admin.dashboard.";
    }
    public function index(){
        return view($this->view."index");
    }
}
