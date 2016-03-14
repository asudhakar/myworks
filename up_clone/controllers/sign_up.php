<?php 

include_once '../model/db.php';
include_once '../app_functions/functions.php';

$connection = db_connect();
$params = $_POST;

finish_sign_up($params);

function finish_sign_up($params){
	var_unset($params['accept']);
	$password = $params['password'];
	encrypt_password($password);
	$params['password'] = $password;
	$params['username'] = rand_string();
	get_insert_query('users',$params);
}





