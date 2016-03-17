<?php 
	include_once '../model/db.php';
	function landing_page_session_check(){
		if(!isset($_SESSION["user_details"])){
			header('location:view/login.php');
		}
	}

	function login_page_session_check(){
		if(isset($_SESSION["user_details"])){
			header('location: ../index.php');
		}
	}

	function signup_page_session_check(){
		if(isset($_SESSION["user_details"])){
			header('location: ../index.php');
		}
	}

	function var_unset($var){
		unset($var);
	}

	function real_escape($data){
		$db = db_connect();
		return mysqli_real_escape_string($db, $data);
	}

	function logout(){
		session_destroy();   
	}

	function encrypt_password(&$data){
		$data = md5($data);
	}