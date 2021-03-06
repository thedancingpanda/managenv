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

Route::get('/home', 'HomeController@index');
Route::get('/environment/{id}', [
    'as'=> 'environment',
    'uses' => 'HomeController@getEnvironment'
]);
Route::post('/environment/{parent_id?}', [
    'as' => 'add-environment',
    'uses' => 'HomeController@addEnvironment'
]);
Route::post('/set-variable/{environment_id}', [
    'as' => 'set-variable',
    'uses' => 'HomeController@setVariable'
]);
Route::post('/delete-variable', [
    'as' => 'delete-variable',
    'uses' => 'HomeController@deleteVariable'
]);
Route::get('/export/{id}', [
    'as' => 'export',
    'uses' => 'HomeController@export'
]);