<?php

namespace App\Modules\Members\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modules\MyProfile\Models\MyProfile;
use App\Providers\Common;
Use Redirect;
use Session;
use App\app_users;
class MembersController extends Controller
{
			//direct access guard
		
		public function __construct(Request $request) 
		{
			
			//return Redirect::to('logout')->send();
			
			 
			if ($request->session()->has('session_login')==false) {
				return Redirect::to('logout')->send();
			}
			
			//echo session('session_login')["is_profile_complete"]; die();
			if(session('session_is_profile_complete')==""){
				//echo "profile not complete"; die();
				$message="Please complete your profile before interaction with another user";
				$request->session()->flash('message', $message);
				//echo session()->get('message'); die();
				return Redirect::to('my_profile')->send();
			}
		
			
		}
	

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
		$user_gender=Common::get_member_by_user_id(session('session_login')['app_user_id']);
		
		if($user_gender["gender_id"]==0){
			$gender_where=1;
		}else{
			$gender_where=0;
		}
		
		$data_member=MyProfile::leftJoin('app_users','app_users_profile.app_user_id','=','app_users.app_user_id')
								->where("gender_id","=",$gender_where)
								 ->get();
        return view("Members::index")->with("data",$data_member);
			
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
