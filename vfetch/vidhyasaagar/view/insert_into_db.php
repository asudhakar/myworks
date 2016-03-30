<?php 



$name_and_numbers = $_POST['name_and_number'];
$message = $_POST['message'];
$name_and_numbers = unserialize(base64_decode($name_and_numbers));
$path = $_POST['path'];





$link = db_connect();

foreach ($name_and_numbers as $key => $number) {
	$sql = "INSERT INTO `MessageOut` (`MessageTo` , `MessageText`) VALUES ('$number', '$message')";
	executeQuery($sql, $link);
	
}
if (!unlink($path))
  {
  echo ("Error deleting $path");
  }
else
  {
  echo ("Deleted $path");
  }
header('Location: ../index.php');

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



	