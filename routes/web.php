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

Route::get('/', function () {
    return view('welcome');
});

use App\Commande;
use App\Article;

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/Cart','ShowArticlesController@index');
Route::get('/ShowOneArticle','ShowArticlesController@index1');
Route::get('/Divers','ShowArticlesController@index2');
Route::get('/multimedia','ShowArticlesController@index3');
Route::get('/Informatique','ShowArticlesController@index4');
Route::get('articles','ArticleController@index');
Route::get('articles/create','ArticleController@create');
Route::post('articles','ArticleController@store');
Route::delete('articles/{id}','ArticleController@destroy');



//les routes de relations n:n
//les articles dans une commande
Route::get('/find/{id}/commande',function($id){
	$pro = Commande::find($id)->article;
	return $pro;
});