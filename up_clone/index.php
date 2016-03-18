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
		<input type="textbox" id="textbox" name="user_question" placeholder="Please ask me anything!">
	</div>

</body>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
	<script type="text/javascript">
		
		$('#textbox').keypress(function(event){
		
			var keycode = (event.keyCode ? event.keyCode : event.which);
			if(keycode == '13'){

				alert('You pressed a "enter" key in textbox');	

				$('#textbox').val("");
				
			}

		});
		
	</script>
</html>

