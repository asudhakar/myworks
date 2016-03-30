<?php 



$name_and_numbers = $_GET['name_and_number'];
$message = $_GET['message'];
$name_and_numbers = unserialize(base64_decode($name_and_numbers));




$link = db_connect();

foreach ($name_and_numbers as $key => $number) {
	$sql = "INSERT INTO `MessageOut` (`MessageTo` , `MessageText`) VALUES ('$number', '$message')";
	executeQuery($sql, $link);
	
}



	function db_connect(){
		$connection = mysqli_connect('localhost', 'root', 'palaniM@67', 'up');
		if (!$connection) {
		    die("Connection failed: " . mysqli_connect_error());
		    exit();
		}
		return $connection;
	}


	function executeQuery($query, $link){
		if(!empty($link)){
			return mysqli_query($link, $query);
		}
	}



	header("location : ../index.php")