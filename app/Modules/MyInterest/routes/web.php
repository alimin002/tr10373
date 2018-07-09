<?php

Route::group(['module' => 'MyInterest', 'middleware' => ['web'], 'namespace' => 'App\Modules\MyInterest\Controllers'], function() {

    Route::resource('myInterest', 'MyInterestController');

});
