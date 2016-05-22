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

$app->get('/', function () use ($app) {
    return view('common.layout');
});

// Database
$app->get('/database', 'DatabaseController@index');
$app->post('/database', 'DatabaseController@store');
$app->delete('/database/{id}', 'DatabaseController@destroy');

// Table
$app->get('/database/{database}/table', 'TableController@index');