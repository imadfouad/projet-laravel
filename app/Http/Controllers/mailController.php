<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

use App\Product ;
use App\Article ;
use App\Commande;
use Session;

use Auth;



use App\Http\Requests ;
use Illuminate\Support\Arr;


class mailController extends Controller
{
    public function send(){

    	

    	Mail::send(['text'=>'mail'],['name','Imad'],function($message){
    		$mail = Auth::user()->email;
    		$message->to($mail,'to Client')->subject("Confirmation d'achat");
    		$message->from('imadfouad48@gmail.com','Imad');
    	});

    	$oldCart = Session::get('cart');
        
        $cart = new Product($oldCart);
        $arts = $cart->items;

        $id_comm = Session::get('id_comm');

    	return view('checkout.success',['arts'=>$arts , 'id_comm' => $id_comm]);
    }
}
