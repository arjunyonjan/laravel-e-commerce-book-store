<?php

//dont foreget
class UserController extends BaseController{

	public function __construct(){}

	public function getIndex(){}

	public function postIndex(){}

	public function postLogin(){
		$email = Input::get('email');
		$password = Input::get('password');

		//need to disable remember_me token..........
		if(Auth::attempt(['email' => $email, 'password'=>$password])){
			return Redirect::route('index');
		}else{
			return Redirect::route('index')->with('error','Please check your email and password');
		}
	}

	public function getLogout(){
		Auth::logout();
		return Redirect::route('index');
	}


	//thanks for watching......... this series.........
	//subscribe, share, like................

	//over and out.......................
}

 ?>