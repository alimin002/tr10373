<?php

Route::group(['module' => 'Myfavouritesmembers', 'middleware' => ['api'], 'namespace' => 'App\Modules\Myfavouritesmembers\Controllers'], function() {

    Route::resource('myfavouritesmembers', 'MyfavouritesmembersController');

});
