<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Material;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    private $view;
    private $route;
    private $material;
    public function __construct(){
        $this->view = "pages.user.material.";
        $this->route = "material.";
        $this->material = new Material();
    }

    public function index(){
        $material = $this->material::all();
        return view($this->view.'index', [
            'material' => $material,
        ]);
    }

    public function content($id){
        $material = $this->material::findOrFail($id);
        $currentMaterial = $this->material::find($id); // Ambil materi saat ini berdasarkan ID atau parameter yang sesuai
        $previousMaterial = $this->material::where('id', '<', $currentMaterial->id)->orderBy('id', 'desc')->first();
        $nextMaterial = $this->material::where('id', '>', $currentMaterial->id)->orderBy('id', 'asc')->first();
        return view($this->view.'content', [
            'material' => $material,
            'currentMaterial' => $currentMaterial,
            'previousMaterial' => $previousMaterial,
            'nextMaterial' => $nextMaterial,1
        ]);
    }
}
