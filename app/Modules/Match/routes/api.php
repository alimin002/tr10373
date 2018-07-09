<?php

Route::group(['module' => 'Match', 'middleware' => ['api'], 'namespace' => 'App\Modules\Match\Controllers'], function() {

    Route::resource('match', 'MatchController');

});
