<?php 

$name_and_number = $_POST['name'];
$path = $_POST['path'];
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
  <input type="hidden" name="path" value="<?php echo $path; ?>">
  <div class="row">
    <div class="col-sm-9">
    <h2>Enter the message</h2>
    </div>
    
    <a href="manage_templates.php"><input type="button" class="btn btn-success" value="Manage Templates" style="margin-top: 17px; margin-left: 128px;"></a>
   
  </div>
  <div class="jumbotron">
    <div class="row">
      <div class="col-sm-9">
        <textarea name="message" class="form-control message-box" rows="5" id="comment" placeholder="enter your message here"></textarea>
      </div>
      <div class="col-sm-3">
        <input type="button" class="btn btn-primary message-button" name="Dear Sir, A Meeting of our Trust is convened on 27.02.2016, Saturday at 10.00 A.M in the Trust Hall of our School, Sankagiri to discuss important matters. Please make it convenient to participate. Thank you-Secretary" value="test1">
        <input type="button" class="btn btn-primary message-button" name="my content2" value="test2">
        <input type="button" class="btn btn-primary message-button" name="my content3" value="test3">
      </div>
    </div>
  </div>
<span id="characters"><span></span></span>
<input type="submit" class="btn btn-primary" value="send">
<a href="../index.php"><input type="button" class="btn btn-warning" value="cancel"></a>
</form>
	
  </div>

<script type="text/javascript">
    
    $('.message-button').click(function(){
      var value =   $(this).attr("name");
      $('.message-box').html(value);
    });
    


</script>


</body></html>