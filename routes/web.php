<?php
use Illuminate\Support\Str;

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

$router->get('/key', function(){
    return Str::random(32);
});

$router->group(['prefix' => 'api'], function () use ($router) {
    // Rumah Sakit
    $router->get('hospitals', 'HospitalController@index');
    $router->get('/hospital/{id}', 'HospitalController@show');
    $router->post('/hospital/save', 'HospitalController@store');
    $router->post('/hospital/{id}/update', 'HospitalController@update');
    $router->post('/hospital/{id}/delete', 'HospitalController@destroy');

    // Posko
    $router->get('spots', 'SpotController@index');
    $router->get('/spot/{id}', 'SpotController@show');
    $router->post('/spot/save', 'SpotController@store');
    $router->post('/spot/{id}/update', 'SpotController@update');
    $router->post('/spot/{id}/delete', 'SpotController@destroy');

    // Telepon Darurat
    $router->get('dials', 'DialController@index');
    $router->get('/dial/{id}', 'DialController@show');
    $router->post('/dial/save', 'DialController@store');
    $router->post('/dial/{id}/update', 'DialController@update');
    $router->post('/dial/{id}/delete', 'DialController@destroy');

    // Kasus Corona
    $router->get('/cases/all', 'CasesController@index');
    $router->get('/cases/day', 'CasesController@day');
    $router->get('/cases/total', 'CasesController@total');
    $router->get('/case/{id}', 'CasesController@show');
    $router->post('/case/save', 'CasesController@store');
    $router->post('/case/{id}/update', 'CasesController@update');
    $router->post('/case/{id}/delete', 'CasesController@destroy'); 
});
