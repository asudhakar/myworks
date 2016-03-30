<html><head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta name="robots" content="noindex, nofollow">
  <meta name="googlebot" content="noindex, nofollow">

  <script type="text/javascript" src="//code.jquery.com/jquery-compat-git.js"></script>


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
});//]]> 

</script>

  
</head>

<body>
  <textarea></textarea>
<span id="characters"><span>
  




</span></span></body></html>