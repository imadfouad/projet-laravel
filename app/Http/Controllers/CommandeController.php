<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Commande;
use routes\web;
use App\Article;


class CommandeController extends Controller
{
	 
	public $id_comm;
	public $compteur=0;

    public function store(Request $request){
    	
    	$Commande = new Commande();

    	if(Auth::check()){
    		$Commande->user_id = Auth::user()->id;
    	}
    	else{
    		return view('auth.login');
    	}
    	



    	$Commande->save();
    	

    	$id_comm = $Commande->id_comm;
    	
    	return redirect()->route('welcome',[$id_comm]);

    	
    }


    public static function getId()
    {
    	return $id_comm;
    }
    

}
