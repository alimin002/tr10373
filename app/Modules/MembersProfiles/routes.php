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


Route::group(['module' => 'MembersProfiles', 'middleware' => ['web'], 'namespace' => 'App\Modules\MembersProfiles\Controllers'], function() {
    Route::post('member_profile','MembersProfilesController@index');
		Route::get('member_profile','MembersProfilesController@index');
});


