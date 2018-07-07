<?php

Route::group(['module' => 'Myfavouritesmembers', 'middleware' => ['web'], 'namespace' => 'App\Modules\Myfavouritesmembers\Controllers'], function() {

    Route::resource('myfavouritesmembers', 'MyfavouritesmembersController');

});
