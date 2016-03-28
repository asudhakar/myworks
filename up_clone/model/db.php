<?php 

	function db_connect(){
		$connection = mysqli_connect('localhost', 'root', '', 'up');
		if (!$connection) {
		    die("Connection failed: " . mysqli_connect_error());
		    exit();
		}
		return $connection;
	}


