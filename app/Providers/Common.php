<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Modules\MyProfile\Models\MyProfile;
class Common extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
				
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
				
    }
		
		public static function get_member_by_user_id($app_user_id){
			$member = MyProfile::where("app_user_id" ,"=",$app_user_id)->first();
			return $member;
		}
		
	
}
