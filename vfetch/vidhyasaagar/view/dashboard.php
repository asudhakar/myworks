<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<?php 

	include_once '../app_functions/default_functions.php';

	if(array_key_exists("GROUP BY",$final_output)){
		unset($final_output['GROUP BY']);
	}

	echo "<pre>";
    print_r($final_output);
    echo "</pre>";



	
 ?>
<div class="container">
            
  <table class="table">
    <tbody>
      <?php
      $i = 1; 
      foreach ($final_output as $class => $student_values) {
      	$html1 = "<h1>$class</h1>";
      	foreach ($student_values as $number_text => $number_and_names) {
      		foreach ($number_and_names as $number => $names) {
      			foreach ($names as $key => $name) {
      				
      				$html2 = $html2.'<td><input type="checkbox" name="name'.$i.' value="'.$name.'|'.$number.'">'.$name.'('.$number.'</td>';
      				
      			}
      		}
      	}

      } ?>
    </tbody>
  </table>
</div>





</body>
</html>