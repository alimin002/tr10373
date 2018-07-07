<?php

Route::group(['module' => 'MyProfile', 'middleware' => ['api'], 'namespace' => 'App\Modules\MyProfile\Controllers'], function() {

    Route::resource('my_profile', 'MyProfileController');

});
