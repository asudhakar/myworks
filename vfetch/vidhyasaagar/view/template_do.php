<?php 



function insert_template($template_name, $template_message, $link){
	$sql = "INSERT INTO `message_templates` (`template_name`, `template_message`) VALUES('$template_name','$template_message')";
	executeQuery($sql, $link);
}