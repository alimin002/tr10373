<?php

Route::group(['module' => 'MyProfile', 'middleware' => ['web'], 'namespace' => 'App\Modules\MyProfile\Controllers'], function() {

    Route::resource('my_profile', 'MyProfileController');

});
