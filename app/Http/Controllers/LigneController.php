<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Commande;
use App\Ligne;

class LigneController extends Controller
{

	public  function index($id_comm){
        $panier = Ligne::all()->where('id_comm',$id_comm);
        $tous=array();
        foreach ($panier as $pan ) {
        	 array_push($tous,  Article::find($pan->id_article));
        }

        return view('Ligne.index',['panier' => $tous , 'id_comm' => $id_comm]);
    }


    public function store(Request $request , $id_comm ,$id_article){

    	$commande = Commande::find($id_comm);

    	$article = Article::find($id_article);


    	$commande->articles()->attach($article , ['quantite'=>1,'prix_unit'=>$article->prix]);


        return redirect()->route('articles',[$id_comm]);
}



public function storee(Request $request , $id_comm , $id_article){

    	$commande = Commande::find($id_comm);

    	$article = Article::find($id_article);


    	$commande->articles()->attach($article , ['quantite'=>1,'prix_unit'=>$article->prix]);

        return redirect()->route('Panier',[$id_comm]); 
}


}