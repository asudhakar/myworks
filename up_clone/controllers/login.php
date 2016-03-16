<?php 
	
	include_once '../app_functions/functions.php';
	include_once '../app_functions/session_functions.php';
	
	function validate_user($username, $password){
		
		$username = real_escape($username);
		$password = real_escape($password);
		
		if($username == "asudhakar@live.in" && $password == "12345"){
			create_session($username);
			return true;
		}else{
			return false;
		}
	}
	$username = $_POST['username'];
	$password = $_POST['password'];
	if(validate_user($username, $password)){
		header("location: ../index.php");
	} else{
		header("location: ../view/login.php");
	}
