<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowArticlesController extends Controller
{

    public function index (){
        return view('Cart');

    }
    public function index1 (){
        return view('ShowOneArticle');

    }
    public function index2 (){
        return view('Divers');

    }
    public function index3 (){
        return view('multimedia');

    }
    public function index4 (){
        return view('Informatique');

    }
}
