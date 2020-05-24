<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//checkout Routes



Route::get('/success','CheckoutController@indexsuccess');


//
Route::get('/Panier/','LigneController@index')->name('Panier');

Route::get('welcome', 'WelcomeController@index')->name('welcome');
Route::get('/', 'WelcomeController@index')->name('accueil');

use App\Commande;
use App\Article;
use App\Mail\Maill;

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Product Thing : (session)
Route::get('/add-to-cart/{id_article}','CartController@getAddToCart');
Route::get('/add-to-carte/{id_article}','CartController@getAddToCartee');

//persistence bdd
Route::get('/payement','CartController@payer');

Route::get('articles','CartController@getIndex');
Route::get('Product','ShowArticlesController@index')->name('PanierTest');

Route::get('/shopping-cart', [
    'uses' => 'CartController@getCart',
    'as' => 'product.shoppingCart'
]);

Route::get('/checkout', [
    'uses' => 'CartController@getCheckout',
    'as' => 'checkout'
]);

Route::get('send', 'mailController@send')->name('mail');

//panier

Route::get('/commande','CommandeController@store');

Route::get('ajoutArticle//pan/{id_article}','LigneController@store');
Route::get('ajoutArticlee/pan/{id_article}','LigneController@storee');


// /panier

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');


Route::get('/ShowOneArticle','ShowArticlesController@index1');

Route::get('articles','WelcomeController@index');

Route::get('articles','ArticleController@index')->name('articles');
Route::get('articlestri','ArticleController@indextri');



Route::get('/article/create','ArticleController@create');
Route::post('/article','ArticleController@store');
Route::delete('articles/{id_article}','ArticleController@destroy');

Route::get('/article/{id_article}','ArticleController@show');
// checkout
Route::post('/checkout',['uses'=>'CheckoutController@postCheckout',
    'as'=>'checkout']);

Route::get('/reduce/{id}',[
	'uses' =>'CartController@getReduceByOne',
	'as' => 'product.reduceByOne'	]);
//login for visiteurs


//mail
Route::get('send2','mailcontroller@send2');





//mail us route
Route::get('/sendemail','SendEmailController@index');

Route::post('/sendemail/send','SendEmailController@send');

Route::get('/mailUs', function(){
	return view('/mailUs');
});

//les routes de relations n:n
//les articles dans une commande
Route::get('/find/{id}/commande',function($id){
	$pro = Commande::find($id)->article;
	return $pro;
});





