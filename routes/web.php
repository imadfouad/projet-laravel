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

Route::get('/paiement/{total}','CheckoutController@index')->name('checkout.index');

Route::get('/success','CheckoutController@indexsuccess');



//
Route::get('/Panier/{id_comm}','LigneController@index')->name('Panier');

Route::get('welcome/{id_comm}', 'WelcomeController@index')->name('welcome');
Route::get('/', 'CommandeController@store')->name('accueil');

use App\Commande;
use App\Article;

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/Cart','ShowArticlesController@index');


//panier

Route::get('/commande','CommandeController@store');

Route::get('ajoutArticle/{id_comm}/pan/{id_article}','LigneController@store');
Route::get('ajoutArticlee/{id_comm}/pan/{id_article}','LigneController@storee');


// /panier

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');


Route::get('/ShowOneArticle','ShowArticlesController@index1');

Route::get('articles','WelcomeController@index');

Route::get('articles/{id_comm}','ArticleController@index')->name('articles');
Route::get('/article/create','ArticleController@create');
Route::post('/article','ArticleController@store');
Route::delete('articles/{id_article}','ArticleController@destroy');

//login for visiteurs



//mail us route
Route::get('/mailUs', function(){
	return view('/mailUs');
});
//les routes de relations n:n
//les articles dans une commande
Route::get('/find/{id}/commande',function($id){
	$pro = Commande::find($id)->article;
	return $pro;
});





