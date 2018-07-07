<?php

Route::group(['module' => 'Messanger', 'middleware' => ['web'], 'namespace' => 'App\Modules\Messanger\Controllers'], function() {

    Route::resource('messanger', 'MessangerController');

});
