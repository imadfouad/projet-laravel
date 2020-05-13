<?php

namespace App\Http\Controllers;

use App\Article;
use App\Commande;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;



class ArticleController extends Controller
{
    public function index($id_comm){
        $listinfo = Article::all()->where('categorie','informatique') ;
        $listmulti =  Article::all()->where('categorie','multimédia') ;
        $listdiv =  Article::all()->where('categorie','divers') ;

        

        return view('Article.index',['articlesdivs' => $listdiv , 'articlesinfs' => $listinfo, 
            'articlesmultis' => $listmulti, 'id_comm' => $id_comm ]);
    }

    public function create(){
        if(!Auth::check() || (!Auth::user()->is_admin && Auth::check()) ){   
    	return view('Article.err');
        }

        elseif(Auth::user()->is_admin && Auth::check()){
            
            return view('Article.create');

        }
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

        return redirect('');

    }

    public function edit(){

    }

    public function update(){

    }

    public function destroy(Request $request , $id_article){
    	
        $article = Article::find($id_article);

        $this->authorize('delete', $article);

        $article->delete();
        return redirect('');

    }

    public function show(){

    }
}
