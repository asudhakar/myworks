<?php 
	include_once '../app_functions/functions.php';
	include_once '../model/db.php';
//GLOBEL
	$base_url = "http://localhost:8888/up_clone/";


	function user_exists($username, $password){
		if($username="sudhakar"&&$password="12345"){
			echo "I am here";
		}
		else{
			echo "Dals";
		}
	}





//INPUT FROM USER
	$username = $_POST['username'];
	$password = $_POST['password'];
	if(user_exists(real_escape($username), real_escape($password))){
		$user_details['id'] = 21;
		$user_details['username'] = 'sudhakar';
		$user_details['email'] = 'asudhakar@live.in';
		$user_details['password'] = '12345';
		create_session($user_details);	
		header("location: $base_url");
	} else{
		header("location: ".$base_url."view/login.php?error=show_error");
	}

	