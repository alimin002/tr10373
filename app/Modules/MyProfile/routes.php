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


Route::group(['module' => 'MyProfile', 'middleware' => ['web'], 'namespace' => 'App\Modules\MyProfile\Controllers'], function() {
    //Route::post('members','MembersController@index');
		Route::get('my_profile','MyProfileController@index');
		Route::post('my_profile/upload_photo_profile','MyProfileController@uploadPhotoProfile');
		Route::post('my_profile/update_profile','MyProfileController@updateProfile');
		Route::get('my_profile/edit/{app_user_profile_id}','MyProfileController@ApiUserProfile');
});


