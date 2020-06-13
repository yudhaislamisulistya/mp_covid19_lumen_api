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
    $router->get('hospitals', 'HospitalController@index');
    $router->get('/hospital/{id}', 'HospitalController@show');
    $router->post('/hospital/save', 'HospitalController@store');
    $router->post('/hospital/{id}/update', 'HospitalController@update');
    $router->post('/hospital/{id}/delete', 'HospitalController@destroy');
});
