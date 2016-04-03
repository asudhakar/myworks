<?php 
include_once 'controllers/function.php';
$target_dir = "files/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;


if (file_exists($target_file)) {
    $uploadOk = 0;
}

if ($_FILES["fileToUpload"]["size"] > 500000) {
    $uploadOk = 0;
}

if ($uploadOk == 0) {
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

    	$sql = "INSERT INTO `files` (`file_name`) VALUES ('$target_file')";
		executeQuery($sql, $link);
    } else {
    	echo "Error in inserting";
    }
}

header("Location: view/dashboard.php?file_path=$target_file");


function db_connect_local(){
	$connection = mysqli_connect('localhost', "root", "palaniM@67", "vidyasaagar");
		if (!$connection) {
		    die("Connection failed: " . mysqli_connect_error());
		    exit();
		}
		return $connection;
}