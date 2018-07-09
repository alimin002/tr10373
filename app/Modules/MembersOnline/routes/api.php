<?php

Route::group(['module' => 'MembersOnline', 'middleware' => ['api'], 'namespace' => 'App\Modules\MembersOnline\Controllers'], function() {

    Route::resource('members_online', 'MembersOnlineController');

});
