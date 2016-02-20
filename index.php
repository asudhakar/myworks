<?php 

$listx= array('a','b');

$listy= array('one','two','three','four','five','six','seven');

$i= 0;
foreach($listy as $value){

if($i == 2){
$i = 0; // reset as 0
}
echo $listx[$i] . " ". $value .",<br>";

$i++;
}