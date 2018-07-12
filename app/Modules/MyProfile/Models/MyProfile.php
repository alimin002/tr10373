<?php

namespace App\Modules\MyProfile\Models;

use Illuminate\Database\Eloquent\Model;

class MyProfile extends Model {
    //
	protected $table 		    = "app_users_profile";
	protected $primaryKey 	    = "app_user_profile_id";
	protected $guarded 			= array('app_users_profile');
	public $timestamps 			= false;


}
