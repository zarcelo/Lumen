<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('links', [
        'as' => 'links.index', 'uses' => 'LinksController@index'
    ]);

    $router->post('links', [
        'as' => 'links.store', 'uses' => 'LinksController@store'
    ]);

    $router->delete('links/{id}', [
        'as' => 'links.destroy', 'uses' => 'LinksController@destroy'
    ]);
});
