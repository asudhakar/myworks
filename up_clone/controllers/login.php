<?php 
	
	include_once '../app_functions/functions.php';
	include_once '../app_functions/session_functions.php';
	
	function validate_user($username, $password){
		$username = real_escape($username);
		$password = real_escape($password);
		if($username == "admin" && $password == "changeNow^78"){
			return create_session($username);
		}else{
			return false;
		}
	}