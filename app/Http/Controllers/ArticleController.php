<?php

namespace App\Http\Controllers;

use App\Article;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;


class ArticleController extends Controller
{
    public function index(){
        $listinfo = Article::all()->where('categorie','informatique');
        $listmulti = Article::all()->where('categorie','multimédia');
        $listdiv = Article::all()->where('categorie','divers');

        return view('Article.index',['articlesdiv' => $listdiv , 'articlesinf' => $listinfo , 
            'articlesmulti' => $listmulti]);
    }

    public function create(){
    	return view('Article.create');
    }

    public function store(Request $request){

    	$article = new Article();

        $article->nom= $request->input('nom');
    	$article->prix= $request->input('prix');
    	$article->categorie= $request->input('categorie');
    	if($request->hasFile('photo')){
    	 $article->photo = $request->photo->store('image');
    	}


    	$article->save();

        return redirect('articles');

    }

    public function edit(){

    }

    public function update(){

    }

    public function destroy(Request $request , $id_article){
    	
        $article = Article::find($id_article);

        $article->delete();
        return redirect('articles');

    }

    public function show(){

    }
}
