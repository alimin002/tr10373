<?php

Route::group(['module' => 'Members', 'middleware' => ['web'], 'namespace' => 'App\Modules\Members\Controllers'], function() {

    Route::resource('members', 'MembersController');

});
