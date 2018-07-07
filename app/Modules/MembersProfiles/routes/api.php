<?php

Route::group(['module' => 'MembersProfiles', 'middleware' => ['api'], 'namespace' => 'App\Modules\MembersProfiles\Controllers'], function() {

    Route::resource('membersProfiles', 'MembersProfilesController');

});
