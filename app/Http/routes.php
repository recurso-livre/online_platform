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

Route::get('/usuario/cadastrar', function () {
    return view('pages.user.create');
});

Route::get("recurso/lista", "ResourceController@index");
Route::get("recurso/criar", "ResourceController@create");
Route::post("recurso/store", "ResourceController@store");

Route::get("categoria/lista", "CategoryController@index");
Route::get("categoria/criar", "CategoryController@create");
Route::post("categoria/store", "CategoryController@store");

// Rota de exemplo para mostrar recursos com a categoria escolhida por id na rota
Route::get("categoria/{id}", "CategoryController@resources");

// Rotas com Middleware Web (mais seguro)
Route::group(['middleware' => ['web']], function()
{
    Route::get('/', function(){
        return view('welcome');
    });

    // Geração das rotas relacionadas a Autenticação e Registro de Usuário
    Route::auth();

    Route::get('/home', 'HomeController@index');
});