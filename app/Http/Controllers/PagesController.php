<?php

namespace App\Http\Controllers;

use App\Models\Material;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function galerija(){
        return view('pages.galerija');
    }

    public function materijali(){
        $materials = Material::all();

        return view('pages.materijali')->with(compact('materials'));
    }

    public function kontakt(){
        return view('pages.kontakt');
    }
}
