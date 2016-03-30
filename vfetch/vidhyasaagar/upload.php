<?php 

	print_r($_POST);

	print_r($_FILES);

$target_dir = "files/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
echo $target_file;


header('Location: view/dashboard.php?file_path='.$target_dir);