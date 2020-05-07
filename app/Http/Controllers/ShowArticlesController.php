<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Providers\Article;
class ShowArticlesController extends Controller
{

    public function index (){
        return view('Cart');

    }
    public function index1 (){
        return view('ShowOneArticle');

    }
    
}
