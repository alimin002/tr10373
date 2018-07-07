<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\app_users;
use Redirect;
use Session;
use Crypt;
class login extends Controller
{
    //
		public function __construct(Request $request)
    {
			/*
       if ($request->session()->has('session_login')==false) {
						return Redirect::to('login');
			 }
			*/			 
    }
	
		
	 //this function called call at the begining when route is empty http://localhost/tr10373/
		public function displayLogin(Request $request ){
			  //print_r (session('session_login')); die();
				//echo session('session_login')["username"]; die();
				if ($request->session()->has('session_login')==false) {
					//echo session('session_login');
					return view('guard');
				}else{
					return Redirect::to('members');
				}
		}
		
		public function getUserData($email){
			$data=app_users::where('email','=',$email)->first();
			return $data;
		}
		
		public function displayHome(Request $request){ 
				$data_user		= $this->getUserData($request->input('email'));				
				$email 		= $data_user["email"];
				$password 		= $data_user["password"];
				$username 		= $data_user["username"];
				//echo $username; die();
				$message  ="";
				if($data_user !=""){
					if($email == $request->input('email')){
						 if($password == $request->input('password') and $email == $request->input('email')){
							 $request->session()->put('session_login',array('email'=>$email,'username'=>$username));
							 //session()->put('session_login', $email); 
							 //session(['session_login' => $email]);
							 //print_r(session('session_login')); die();
							  $request->session()->flash('session_login2', 'this value is from session flash');
								return Redirect::to('members');
						 }else{	
							$message ="Email or password is incorrect";
							return Redirect::to('')->with('message', $message);
						 }
					}else{
							$message ="Email or password is incorrect, <br/>please try again";
							
							return Redirect::to('')->with('message', $message);
					}
				}else{
					 $message ="Email or password is incorrect";					
						return Redirect::to('')->with('message', $message);
				}
		}		
			
		public function doLogout(Request $request){
				$request->session()->forget('session_login');
				//$request->session()->forget('session_message');
				return Redirect::to('');
		}
		
		
		function check_account_exists($email){
			$data=app_users::where('app_users.email', '=','%'.$email.'%')
											->count();
											return $data;
		}
		
		
		public function do_register(Request $request){
			$username=$request->input("username");
			$password=$request->input("password");
			$email=$request->input("email");
			
			//echo $this->check_account_exists($email); die();
			
			$user=array("username"	=>$username,
										"password"=>$password,
									  "email"	  =>$email
									 );
				
       if($this->check_account_exists($email)==0)	{		
					$save=app_users::insert($user);				
					if($save==1){
						$message="Registration successful";
						 $request->session()->put('session_login',array('email'=>$email));
					}else{
						$message="Registration failed";
					}
					return Redirect::to('members');
			 }else{
				  $message="Registrtion failed your email is already registered";
				 return Redirect::to('')				
				 ->with("message",$message);
			 }
				return Redirect::to('suplier')
								->with("message",$message);
			//echo $email;
		}
}
