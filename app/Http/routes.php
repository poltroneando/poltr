<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();
Route::group(['prefix' => '/perfil'],function(){
	Route::get('/', ['middleware' => 'auth', 'uses' => 'PerfilController@profile']);
	Route::post('/', 'PerfilController@update_avatar');
});
Route::get('/cadastrar', function() {
	return view('auth/login',['tipo'=>'1']);
});
Route::get('/register', function() {	
	return view('auth/login',['tipo'=>'1']);
});

Route::get('/login', function() {
	return view('auth/login',['tipo'=>'0']);
});
Route::get('/filmes', 'FilmesController@show');
Route::get('/genero', 'GeneroController@show');

Route::get('/home', 'HomeController@index');
