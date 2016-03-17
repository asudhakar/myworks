<?php  
	session_start();
	function create_session($data){
		if(!empty($data)){
			$user_details['id'] = '1';
		 	$user_details['username'] = 'sudhakar';
		 	$user_details['email'] = 'asudhakar@live.in';
		 	$user_details['password'] = '12345';
			$_SESSION["user_details"] = base64_encode(serialize($user_details));
			return true;
		} else{
			return false;
		}
	}