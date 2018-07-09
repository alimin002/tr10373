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


Route::group(['module' => 'InterstedInMe', 'middleware' => ['web'], 'namespace' => 'App\Modules\InterstedInMe\Controllers'], function() {
    //Route::post('members','MembersController@index');
		Route::get('interested_in_me','InterstedInMeController@index');
});


