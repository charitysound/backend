<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', ['as' => 'home', function()
{
	return View::make('index');
}]);

Route::get('/login', ['as' => 'login', function()
{
	return View::make('login');
}]);

Route::group(array('prefix' => 'api'), function()
{

    Route::get('/', function()
    {
        return Response::json(array('version' => '0.0.1'));
    });

    Route::get('/users', function()
    {
        return Response::json(array('name' => 'Alex'));
    });

});