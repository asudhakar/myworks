<?php 
	include_once '../model/db.php';
	function landing_page_session_check(){
		if(empty($_SESSION["user_details"])){
			header('location:view/login.php');
		}
	}

	function login_page_session_check(){
		if(isset($_SESSION["user_details"])){
			header('location: ../index.php');
		}
	}

	function signup_page_seesion_check(){
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

	function rand_string(){
		$str1 = substr(md5(microtime()), 0, 5);
		$table_name = 'users';
		$str['username'] = $str1;
		if(select($table_name, $str)) $str1 = rand_string();
		return $str1;
	}