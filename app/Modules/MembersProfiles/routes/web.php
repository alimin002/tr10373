<?php

Route::group(['module' => 'MembersProfiles', 'middleware' => ['web'], 'namespace' => 'App\Modules\MembersProfiles\Controllers'], function() {

    Route::resource('membersProfiles', 'MembersProfilesController');

});
