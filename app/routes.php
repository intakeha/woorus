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

Route::get('/', 'HomeController@showWelcome');
Route::get('/signup', 'HomeController@signup');
Route::get('/portfolio/heartstrings', 'HomeController@heartstrings');

//Form request:: POST action will trigger to controller
Route::post('contact','ContactController@getContactUsForm');
