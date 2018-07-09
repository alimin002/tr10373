<?php

Route::group(['module' => 'MyInterest', 'middleware' => ['api'], 'namespace' => 'App\Modules\MyInterest\Controllers'], function() {

    Route::resource('myInterest', 'MyInterestController');

});
