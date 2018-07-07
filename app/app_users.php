<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class app_users extends Model
{
    //
	protected $table 				= "app_users";
	protected $primaryKey 	= "app_user_id";
	protected $guarded 			= array('app_user_id');
	public $timestamps 			= false;
}
