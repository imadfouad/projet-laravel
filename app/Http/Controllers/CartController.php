<?php

namespace App\Http\Controllers;
use App\Product ;
use App\Article ;

use Gloudemans\Shoppingcart\Facades\Cart;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests ;


use Session ;
class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        $articles = Article::all();
        return view('articles', ['articles' => $articles]);

    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }






    public function getAddToCart( Request $request , $id_article)
    {
        $article=Article::find($id_article);
        $oldCart = Session :: has('cart') ? Session ::get('cart') : null ;
        $cart = new Product($oldCart) ;
        $cart ->add($article,$article->id_article);

        $request->session()->put('cart',$cart);
        $request->session()->save();



        return redirect()->route('articles');
    }



    public function getCart()
    {
        if (!Session::has('cart')) {
            return view('Cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('Cart', ['articles' => $cart->items, 'TotalPrice' => $cart->TotalPrice]);

    }
    public function getCheckout()
    {
        if (!Session::has('cart'))
        {
            return view ('addToCart');
        }
        $oldCart= Session::get('cart');
        $cart= new Cart($oldCart);
        $total=$cart->TotalPrice;
        return view ('Checkout',['total'=>$total]);
    }






    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
