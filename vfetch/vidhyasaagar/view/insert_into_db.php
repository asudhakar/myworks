<?php 

echo "<pre>";
print_r($_GET);
echo "</pre>";


$name_and_numbers = $_GET['name_and_number'];
$message = $_GET['message'];
$name_and_numbers = unserialize(base64_decode($name_and_numbers));


echo "<pre>";
print_r($name_and_numbers);
echo "</pre>";