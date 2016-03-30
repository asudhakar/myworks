<?php 

$name_and_number = $_POST['name'];
$name_and_number = base64_encode(serialize($name_and_number));


?>

<html><head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta name="robots" content="noindex, nofollow">
  <meta name="googlebot" content="noindex, nofollow">

  <script type="text/javascript" src="//code.jquery.com/jquery-compat-git.js"></script>

 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript">//<![CDATA[
$(window).on('load', function() {
$('textarea').keyup(updateCount);
$('textarea').keydown(updateCount);

function updateCount() {
    var cs = $(this).val().length;
    if(cs < 160){
    	$('#characters').text(cs);
    }else{
    	
    	$('#characters').text('160 characters exceded. 2 sms will be sent');
    }
}
});

</script>

  
</head>

<body>
<div class="container">
<form action="insert_into_db.php" method="post">
	<input type="hidden" name="name_and_number" value="<?php echo $name_and_number; ?>">
	<h2>Enter the message</h2>
  <textarea name="message" class="form-control" rows="5" id="comment"></textarea>
<span id="characters"><span></span></span>
<input type="submit" value="send">
</form>
	
  </div>




</body></html>