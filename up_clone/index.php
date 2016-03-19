<?php  
  session_start();
  include_once 'app_functions/functions.php'; 
  landing_page_session_check();
?>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Welcome</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="css/jumbotron-narrow.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>
  </head>
  <body>
    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation" class="active"><a href="#">Home</a></li>
            <li role="presentation"><a href="https://sudhakarannadurai.wordpress.com/aboutme/">About</a></li>
            <li role="presentation"><a href="view/login.php?action=logout">Logout</a></li>
          </ul>
        </nav>
        <h3 class="text-muted">My App</h3>
      </div>
      <div class="jumbotron" style="height: 70%;">
        <p id="loading" style="display: none">Loading</p>
        <div id="output_text">
        	<h1>Welcome</h1>
        </div>
        

      </div>
      <div class="form-group">
      <form>
        <input class="form-control input-lg" id="textbox-user-question" placeholder="Type here anything &#128515;, and press Enter &#128521;" type="text" required autofocus>
      </form>
	      
	  </div>
      <footer class="footer">

         <p style="text-align: center">All rights are reserved by <a href="#">Tech Undefined</a>, by <a href="https://twitter.com/sudhakar_valar">@sudhakar</a>.</p>
      </footer>
    </div> 
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
	<script type="text/javascript">
		
		$('#output_text').show();
		$('#textbox-user-question').keypress(function(event){
			var keycode = (event.keyCode ? event.keyCode : event.which);
			if(keycode == '13'){
				var user_question = $('#textbox-user-question').val();
        if(user_question.length > 0){
          jQuery('#output_text').hide();
          jQuery('#loading').show();
          $.ajax({
            type: "POST",
            url: 'controllers/index.php',
            data: {name : user_question},
            success: function(data) {
              $( "#output_text" ).html( data );
              jQuery('#output_text').show();
              jQuery('#loading').hide();
            }
          });
          $('#textbox-user-question').val("");
        }
			}
		});
	</script>

</body></html>