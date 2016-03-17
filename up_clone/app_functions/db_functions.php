<?php 
	include_once '../model/db.php';

	function check_user_exists($username, $password){
		$sql_query = "SELECT `user_id`, `username`, `email`, `first_name`, `last_name`, `gender`, `dob`, `location`, `profile_pic`, `created_at`, `last_seen`, `followers`, `following`, `stats`, `online`, `user_spam_reports` FROM `users` WHERE `username` = '".$username."'AND `password` = '".$password."'";
		$results = execute_query($sql_query);
		// print_r($results);
		while($row = fetch_array($result)){
			$user_details['user_id'] = $row['user_id'];
			$user_details['username'] = $row['username'];
			$user_details['email'] = $row['email'];
			$user_details['first_name'] = $row['first_name'];
			$user_details['last_name'] = $row['last_name'];
			$user_details['gender'] = $row['gender'];
			$user_details['dob'] = $row['dob'];
			$user_details['location'] = $row['location'];
			$user_details['profile_pic'] = $row['profile_pic'];
			$user_details['created_at'] = $row['created_at'];
			$user_details['last_seen'] = $row['last_seen'];
			$user_details['followers'] = $row['followers'];
			$user_details['following'] = $row['following'];
			$user_details['stats'] = $row['stats'];
			$user_details['online'] = $row['online'];
			$user_details['user_spam_reports'] = $row['user_spam_reports'];
		}
		print_r($user_details);
	}

	function execute_query($query){
		$link = db_connect();
		return mysqli_query($link, $query);
	}

	function fetch_array($objects){
		return mysqli_fetch_assoc($objects);
	}