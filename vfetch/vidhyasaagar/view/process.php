<?php 

$name_and_number = $_GET['name'];

$name_and_number = serialize($name_and_number);


?>






<script type="text/javascript">
function LimtCharacters(txtMsg, CharLength, indicator) {
chars = txtMsg.value.length;
document.getElementById(indicator).innerHTML = CharLength - chars;
if (chars > CharLength) {
txtMsg.value = txtMsg.value.substring(0, CharLength);
}
}
</script>
</head>
<body>
<div style="font-family:Verdana; font-size:13px">
Number of Characters Left:
<label id="lblcount" style="background-color:#E2EEF1;color:Red;font-weight:bold;">140</label><br/>
<textarea id="mytextbox" rows="5" cols="25" onkeyup="LimtCharacters(this,140,'lblcount');"></textarea>
</div>
</body>
</html>