<?php  
	session_start();
	include_once 'app_functions/functions.php';	
	landing_page_session_check();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
	<div class="container">

	<h1>Hello</h1>
	<a href="view/login.php?action=logout">Logout</a>

	</div>

</body>
<script type="text/javascript" src="js/bootstrap.js"></script>
</html>