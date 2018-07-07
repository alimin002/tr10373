<?php

Route::group(['module' => 'Iamtheirfavourites', 'middleware' => ['web'], 'namespace' => 'App\Modules\Iamtheirfavourites\Controllers'], function() {

    Route::resource('iamtheirfavourites', 'IamtheirfavouritesController');

});
