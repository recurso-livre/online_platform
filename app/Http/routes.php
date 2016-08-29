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

Route::get("recurso/lista", "ResourceController@index");
//Route::get("recurso/criar", "ResourceController@create");
//Route::post("recurso/store", "ResourceController@store");

Route::get("categoria/lista", "CategoryController@index");
Route::get("categoria/criar", "CategoryController@create");
Route::post("categoria/store", "CategoryController@store");

// Rota de exemplo para mostrar recursos com a categoria escolhida por id na rota
Route::get("categoria/{id}", "CategoryController@resources");

// Rotas com Middleware Web (mais seguro)
Route::group(['middleware' => ['web']], function()
{
    // Geração das rotas relacionadas a Autenticação e Registro de Usuário
    Route::auth();

    // UserAuthController só será usado com autenticação
    //Route::get('/', 'UserAuthController@home');
    
    Route::get('/', ['as' => 'home.index', 'uses' => 'GuestController@home']);
    
    // Rotas de usuário
    Route::group(['prefix' => 'usuario'], function()
    {
        // Rota não-autenticada
        Route::get('cadastrar', ['as' => 'user.create', 'uses' => 'GuestController@createUser']);
    });
    
    // Rotas de recurso
    Route::group(['prefix' => 'recurso'], function()
    {
        //Route::get('cadastrar', ['as' => 'resource.create', 'uses' => "ResourceController@create"]);
        
        
        Route::get('procurar/{category}/{query}/{page}', ['as' => 'resource.search', 'uses' => 'ResourceController@search']);
    });
    
    // Rotas de categoria
    Route::group(['prefix' => 'categoria'], function()
    {
        Route::get('cadastrar', ['as' => 'category.create', 'uses' => 'CategoryController@create']);
    });
    
    // Rotas da API
    Route::group(['prefix' => 'api'], function()
    {
        // API de recurso
        Route::group(['prefix' => 'recurso'], function()
        {
            Route::post('cadastrar', ['as' => 'api.resource.create', 'uses' => 'ResourceController@store']);
        });
        
        // API de categoria
        Route::group(['prefix' => 'category'], function()
        {
            Route::get('cadastrar', ['as' => 'api.category.create', 'uses' => 'CategoryController@create']);
        });
    });
    
    Route::get('/recurso/cadastrar', "ResourceController@create");
});