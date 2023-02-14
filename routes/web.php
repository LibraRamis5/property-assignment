<?php

use App\Http\Middleware\MeasureExecutionTime;

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->group(['prefix'=>'api/v1', 'middleware' => MeasureExecutionTime::class], function() use($router){
    $router->get('/prime', 'NumberController@prime');
    $router->get('/even', 'NumberController@even');
});

$router->get('/stats', 'StatsController@index');


