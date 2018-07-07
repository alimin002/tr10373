<?php

Route::group(['module' => 'Iamtheirfavourites', 'middleware' => ['api'], 'namespace' => 'App\Modules\Iamtheirfavourites\Controllers'], function() {

    Route::resource('iamtheirfavourites', 'IamtheirfavouritesController');

});
