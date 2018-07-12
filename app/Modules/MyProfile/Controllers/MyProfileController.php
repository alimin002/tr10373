<?php

namespace App\Modules\MyProfile\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\app_users;
use App\Modules\MyProfile\Models\MyProfile;
use Storage;
use Redirect;
class MyProfileController extends Controller
{
	//direct access guard
	    public function __construct(Request $request) 
		{
			if ($request->session()->has('session_login')==false) {
				return Redirect::to('logout')->send();
			}
		}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$photo_profile=$this->getUserData(session('session_login')['app_user_id'])["photo_profile"];
		$data_profile =$this->getDataProfile(session('session_login')['app_user_id']);
        return view("MyProfile::index")
			  ->with("data_profile",$data_profile)
		      ->with("photo_profile",$photo_profile);
    }
	
	function deleteDir($dirPath) {
    if (! is_dir($dirPath)) {
        throw new InvalidArgumentException("$dirPath must be a directory");
    }
    if (substr($dirPath, strlen($dirPath) - 1, 1) != '/') {
        $dirPath .= '/';
    }
    $files = glob($dirPath . '*', GLOB_MARK);
    foreach ($files as $file) {
        if (is_dir($file)) {
            self::deleteDir($file);
        } else {
            unlink($file);
        }
    }
    rmdir($dirPath);
}
	
	function getUserData($app_user_id){
			$data=app_users::where('app_user_id','=',$app_user_id)->first();
			return $data;
	}
	function getDataProfile($app_user_id){
			$data=MyProfile::where('app_user_id','=',$app_user_id)->first();
			return $data;
	}
	
	function ApiUserProfile($app_user_profile_id){
			//echo $app_user_id; die();
			$data=MyProfile::where('app_user_profile_id','=',$app_user_profile_id)->first();
			//print_r($data); die();
			return json_encode($data);
	}
	
	function uploadPhotoProfile(Request $request){
		$app_user_id=session('session_login')['app_user_id'];
		$username   =session('session_login')['username'];
		
        $file       = $request->file('id-input-file-3');
        $fileName   = $file->getClientOriginalName();
		
		$upload_dir = 'uploads/image/';
		
		if (file_exists('uploads/image/'.$app_user_id)==1) {
		   $this->deleteDir('uploads/image/'.$app_user_id);
        }
		//mkdir($upload_dir.$app_user_id,0777, true);
		$path_user = 'uploads/image/'.$app_user_id;
        $request->file('id-input-file-3')->move($path_user, $fileName);
		$user=array("photo_profile"=>$fileName);
		 
		$update = app_users::where('app_user_id', '=',$app_user_id)->update($user);
		
		  //change photo profile in the main blade
		 $request->session()->put('session_photo_profile',$fileName);
		
		//$url = Storage::url($path_user.'/'.$fileName);
		//echo $url;
		//die();
		
		return redirect()->to('my_profile');
	}
	
	function check_user_exists($app_user_id){
		$data=MyProfile::where('app_user_id','=',$app_user_id)->count();
		if($data==0){
			return false;
		}else{
			return true;
		}
			
	}
	
	public function updateProfile(Request $request){
	  $fullname        =$request->input("fullname");
	  $addres          =$request->input("addres");
	  $telephone_number=$request->input("telephone_number");
	  $birth_date      =$request->input("birth_date");
	  $birth_place     =$request->input("birth_place");
	  $gender_id       =$request->input("gender_id");
	  $about_me        =$request->input("about_me");
	  $app_user_id     =$request->input("app_user_id");
	  
	  //
	  $user_profile=array(
	   "fullname"     =>$fullname,
	   "addres"       =>$addres,
	   "birth_date"   =>$birth_date,
	  "birth_place"   =>$birth_place,
	  "gender_id"     =>$gender_id,
	  "about_me"      =>$about_me,
	  "app_user_id"   =>$app_user_id
	                     );
						 
	   
       if($this->check_user_exists($app_user_id)==false){
		   $save=MyProfile::insert($user_profile); 
	   }else{
		   $update=MyProfile::where('app_user_id', '=',$app_user_id)->update($user_profile);
	   }
	  
	   return redirect()->to('my_profile');
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
