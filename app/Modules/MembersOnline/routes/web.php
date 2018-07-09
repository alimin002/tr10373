<?php

Route::group(['module' => 'MembersOnline', 'middleware' => ['web'], 'namespace' => 'App\Modules\MembersOnline\Controllers'], function() {

    Route::resource('members_online', 'MembersOnlineController');

});
