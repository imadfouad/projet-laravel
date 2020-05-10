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
        $tous=[];
        foreach ($panier as $pan ) {
        	 array_push($tous,  Article::find($pan->id_article));
        }

        return view('Ligne.index',['panier' => $tous , 'id_comm' => $id_comm]);
    }


    public function store(Request $request){

    	$ligne = new Ligne();

    	$ligne->id_comm = $request->input('id_comm');
    	$ligne->id_article = $request->input('id_article');
    	$ligne->quantite = 1;
    	$ligne->prix_unit = $request->input('prix_unit');

    	$ligne->save();

        return redirect()->route('articles',[$ligne->id_comm]);
}

public function storee(Request $request){

    	$ligne = new Ligne();

    	$ligne->id_comm = $request->input('id_comm');
    	$ligne->id_article = $request->input('id_article');
    	$ligne->quantite = 1;
    	$ligne->prix_unit = $request->input('prix_unit');

    	$ligne->save();

        return redirect()->route('Panier',[$ligne->id_comm]); 
}


}