<?php

namespace App\Http\Controllers;
use App\Product ;
use App\Article ;
use App\Commande;
use Session;

use Auth;
use Stripe\Charge;

use Illuminate\Http\Request;
use App\Http\Requests ;
use Illuminate\Support\Arr;
use Stripe\Stripe ;



class CartController extends Controller
{
    /**
     * Display a listing of the ressource.
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
        ///
    }






    public function getAddToCart( Request $request  ,$id_article)
    {
        $article=Article::find($id_article);
        $oldCart = Session :: has('cart') ? Session ::get('cart') : null ;
        $cart = new Product($oldCart) ;
        $cart ->add($article,$article->id_article);

        $request->session()->put('cart',$cart);
        $request->session()->save();



         return redirect()->route('articles');
    }

    public function getAddToCartee( Request $request  ,$id_article)
    {
        $article=Article::find($id_article);
        $oldCart = Session :: has('cart') ? Session ::get('cart') : null ;
        $cart = new Product($oldCart) ;
        $cart ->add($article,$article->id_article);

        $request->session()->put('cart',$cart);
        $request->session()->save();

        if (!Session::has('cart')) {
            return view('shop.shopping-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Product($oldCart);
        return view('shop.shopping-cart', ['articles' => $cart->items, 'TotalPrice' => $cart->TotalPrice]);

        
    }

    public function getReduceByOne($id_article){
        $article=Article::find($id_article);
        $oldCart = Session :: has('cart') ? Session ::get('cart') : null ;
        $cart = new Product($oldCart) ;
        $cart->reduceByOne($article , $id_article);

        if(count($cart->items) > 0){
        Session::put('cart',$cart);
        }else{
            Session::forget('cart');
        }
        return view('shop.shopping-cart', ['articles' => $cart->items, 'TotalPrice' => $cart->TotalPrice]);
    }

    public function payer(Request $request)
    {
        if (!Session::has('cart')) {
            return redirect()->route('shop.shopping-cart');
        }
        //Commande
        $Commande = new Commande();
        $Commande->user_id = Auth::user()->id;
        $Commande->save();
        $id_comm = $Commande->id_comm;

        $oldCart = Session::get('cart');
        $cart = new Product($oldCart);

        Stripe::setApiKey('sk_test_mI9xXr7eVa1yrPww1GGUQH1C00srbRgC5T');
        $arts = $cart->items;

        foreach($arts as $art)
        {
            $id_article = $art['id_article'];

            $article = Article::find($id_article);


            $Commande->articles()->attach($article , ['quantite'=>$art['Qty'],'prix_unit'=>$art['price']]);
        }
        try {
            Charge::create(array(
                "amount" => $cart->TotalPrice * 100,
                "currency" => "usd",
                "source" => "tok_visa",
                "description" => "Test Charge",


            ));
        } catch (\Exception $e) {
            return redirect()->route('checkout')->with('error', $e->getMessage());
        }

        Session::forget('cart');
        return redirect()->route('articles',['arts'=>$arts])->with('success', 'Successfully purchased products!');
    }



    public function getCart()
    {
        if (!Session::has('cart')) {
            return view('shop.shopping-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Product($oldCart);
        return view('shop.shopping-cart', ['articles' => $cart->items, 'TotalPrice' => $cart->TotalPrice]);

    }
    public function getCheckout()
    {
        

        if (!Session::has('cart'))
        {
            return view ('shop.shoppingCart');
        }
        $oldCart= Session::get('cart');
        $cart= new Product($oldCart);
        $total= $cart->TotalPrice;

        return view ('checkout.index',['total'=>$total  ]);
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
        
        $cart= Session::get('cart');
        
        $arts = $cart->items;
           foreach ($arts as $art)
           {
               if ($art['id_article'] == $id) 
               {                
                   unset($cart[$art['id']]);
                   break;
               }
           }

           //put back in session array without deleted item
           
           //then you can redirect or whatever you need
           return view('shop.shopping-cart', ['articles' => $cart->items, 'TotalPrice' => $cart->TotalPrice]);
    }
}
