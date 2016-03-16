<?php 
	
	include_once '../app_functions/functions.php';
	include_once '../app_functions/session_functions.php';
	
	function validate_user($username, $password){
		
		$username = real_escape($username);
		$password = real_escape($password);
		echo $username;
		if($username == "asudhakar@live.in" && $password == "12345"){
			echo "I am created";
			create_session($username);
			return true;
		}else{
			return false;
		}
	}

	if (isset($_POST['submit'])) {
     validate_user($_POST['username'], $_POST['password']);
     login_page_session_check();
  	} 