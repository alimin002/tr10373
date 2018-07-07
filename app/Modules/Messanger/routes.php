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


Route::group(['module' => 'Messanger', 'middleware' => ['web'], 'namespace' => 'App\Modules\Messanger\Controllers'], function() {
    Route::post('messanger','MessangerController@index');
		Route::get('messanger','MessangerController@index');
});


