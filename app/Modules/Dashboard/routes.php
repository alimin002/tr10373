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


Route::group(['module' => 'Dashboard', 'middleware' => ['web'], 'namespace' => 'App\Modules\Dashboard\Controllers'], function() {
    Route::post('dashboard','DashboardController@index');
		Route::get('dashboard','DashboardController@index');
		Route::post('dashboard/save','DashboardController@save');
		Route::get('dashboard/edit/{app_dashboard_id}','DashboardController@edit');
		Route::post('dashboard/update','DashboardController@update');
		Route::get('dashboard/render_lookup_category','DashboardController@renderLookupCategory');
		Route::post('dashboard/destroy','DashboardController@destroy');
});


