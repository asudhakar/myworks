<?php 

	print_r($_POST);

	print_r($_FILES);

$target_dir = "files/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
echo $target_file;