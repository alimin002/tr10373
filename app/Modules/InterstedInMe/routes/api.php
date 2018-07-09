<?php

Route::group(['module' => 'InterstedInMe', 'middleware' => ['api'], 'namespace' => 'App\Modules\InterstedInMe\Controllers'], function() {

    Route::resource('interstedInMe', 'InterstedInMeController');

});
