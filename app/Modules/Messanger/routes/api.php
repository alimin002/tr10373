<?php

Route::group(['module' => 'Messanger', 'middleware' => ['api'], 'namespace' => 'App\Modules\Messanger\Controllers'], function() {

    Route::resource('messanger', 'MessangerController');

});
