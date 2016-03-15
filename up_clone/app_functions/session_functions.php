<?php  

	function create_session($data){
		if(!empty($data)){
			$user_details['id'] = '1';
		 	$user_details['username'] = 'sudhakar';
		 	$user_details['email'] = 'asudhakar@live.in';
		 	$user_details['password'] = '12345';
			$_SESSION["user_details"] = base64_encode(serialize($user_details));
			if(isset($_SESSION['user_details'])){
				return true;
			}
			return false;
		} else{
			return false;
		}
	}