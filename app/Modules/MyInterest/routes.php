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


Route::group(['module' => 'MyInterest', 'middleware' => ['web'], 'namespace' => 'App\Modules\MyInterest\Controllers'], function() {
    //Route::post('members','MembersController@index');
		Route::get('my_interest','MyInterestController@index');
});


