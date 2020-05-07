<?php

namespace App\Http\Controllers;

use App\Article;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;


class ArticleController extends Controller
{
    public function index(){

    }

    public function create(){
    	return view('Article.create');
    }

    public function store(Request $request){

    	$article = new Article();

    	$article->prix= $request->input('prix');
    	$article->categorie= $request->input('categorie');
    	if($request->hasFile('photo')){
    	 $article->photo = $request->photo->store('image');
    	}


    	$article->save();

    }

    public function edit(){

    }

    public function update(){

    }

    public function destroy(Request $request , $id){
    	
    }
}
