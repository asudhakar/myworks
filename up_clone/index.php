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
        <h3 class="text-muted">Project name</h3>
      </div>
      <div class="jumbotron" style="height: 70%;">
        <p id="loading" style="display: none">Loading</p>
        <div id="output_text">
        	<h1>Welcome</h1>
        </div>
        

      </div>
      <div class="form-group">
	      <input class="form-control input-lg" id="textbox-user-question" type="text" autofocus>
	  </div>
      <footer class="footer">
        <p>© 2015 Company, Inc.</p>
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
				jQuery('#output_text').hide();
				jQuery('#loading').show();
				$.ajax({
					type: "POST",
					url: 'controllers/index.php',
					data: {name : user_question},
					success: function(data) {
						$( "#output_text" ).html('<br/><div class="row"><div class="col-xs-3"><button type="button" class="btn btn-info" id="publishButton">publish</button>  </div><div class="col-xs-8"></div><div class="col-xs-1"><a href="view/addNew.php?name=sudhaa"><button type="button" class="btn btn-info" id="addButton">Add New</button></a></div></div><hr/>' + data );
						jQuery('#output_text').show();
						jQuery('#loading').hide();
					}
				});
				$('#textbox-user-question').val("");
			}
		});
	</script>

</body></html>