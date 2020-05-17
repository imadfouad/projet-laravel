<?php

namespace App\Http\Controllers;

use App\Article;
use App\Commande;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;



class ArticleController extends Controller
{
    public function index(){
        $listinfo = Article::all()->where('categorie','informatique') ;
        $listmulti =  Article::all()->where('categorie','multimédia') ;
        $listdiv =  Article::all()->where('categorie','divers') ;

        

        return view('Article.index',['articlesdivs' => $listdiv , 'articlesinfs' => $listinfo, 
            'articlesmultis' => $listmulti ]);
    }

    public function indextri(Request $request){

        $min = $request->input('prixmin');
        $max = $request->input('prixmax');
        if(empty($min))
            $min=0;
        if(empty($max))
            $max=99999999;

        $listinfo = Article::all()->where('categorie','informatique') 
                                  ->where('prix' , '>' ,$min)
                                  ->where('prix' , '<' ,$max);
                                  
        $listmulti =  Article::all()->where('categorie','multimédia')
                                  ->where('prix' , '>' ,$min)
                                  ->where('prix' , '<' ,$max) ;

        $listdiv =  Article::all()->where('categorie','divers') 
                                  ->where('prix' , '>' ,$min)
                                  ->where('prix' , '<' ,$max);

        

        return view('Article.index',['articlesdivs' => $listdiv , 'articlesinfs' => $listinfo, 
            'articlesmultis' => $listmulti ]);
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

    public function show($id_comm , $id_article) {
        $article = Article::find($id_article);
        return view('Article.show',['article' => $article , 'id_comm' => $id_comm]);
  }
}
