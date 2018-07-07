<?php

Route::group(['module' => 'Members', 'middleware' => ['api'], 'namespace' => 'App\Modules\Members\Controllers'], function() {

    Route::resource('members', 'MembersController');

});
