<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('produtos','ProdutosController@index');
Route::get('produtos/create','ProdutosController@create');
Route::post('produtos/store', 'ProdutosController@store');
Route::get('produtos/{id}/destroy','ProdutosController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index');
