<?php 




$name_and_numbers = $_GET['name_and_number'];
$message = $_GET['message'];
$name_and_numbers = base64_decode(unserialize($name_and_numbers));
echo "<pre>";
print_r($name_and_numbers);
echo "</pre>";