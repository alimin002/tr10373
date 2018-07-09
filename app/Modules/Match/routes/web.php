<?php

Route::group(['module' => 'Match', 'middleware' => ['web'], 'namespace' => 'App\Modules\Match\Controllers'], function() {

    Route::resource('match', 'MatchController');

});
