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

Route::group(array('before' => 'auth'), function()
{
    View::share('user', Auth::user());
    Route::get('/', ['as' => 'home', function()
    {
    	return View::make('index');
    }]);
    Route::get('logout', ['as' => 'logout', 'uses' => 'AuthController@getLogout']);
});

Route::group(array('before' => 'guest'), function()
{
    Route::get('login', ['as' => 'login', 'uses' => 'AuthController@getLogin']);
    Route::post('login', ['as' => 'postLogin', 'uses' => 'AuthController@postLogin']);
    Route::get('activate', ['as' => 'activate', 'uses' => 'AuthController@getActivate']);
});

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