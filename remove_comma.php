<?php
$one = "A";
$two = "B";
$three = "C";
$four = "D";
$message = "";

$hello = array();
$hello['one'] = $one;
$hello['two'] = $two;
$hello['three'] = $three;
$hello['four'] = $four;

foreach ($hello as $value){
    if (empty($value)){
        $message .= $value;
    }   else
    $message .= $value.",";
}
echo rtrim($message, ',');