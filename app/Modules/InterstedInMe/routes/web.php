<?php

Route::group(['module' => 'InterstedInMe', 'middleware' => ['web'], 'namespace' => 'App\Modules\InterstedInMe\Controllers'], function() {

    Route::resource('interstedInMe', 'InterstedInMeController');

});
