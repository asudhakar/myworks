<?php 

$stringwithMonth = " 22 July-28 July 2015";
$search = Array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
$replace = Array('jan', 'feb', 'mar', 'apr', 'may', 'jun', 'jly', 'aug', 'sep', 'oct', 'nov', 'dec');

$changedSrting = str_replace($search, $replace, $stringwithMonth);

echo $changedSrting;
