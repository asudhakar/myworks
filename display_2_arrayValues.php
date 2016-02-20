<?php 

$array1 = array('option a','option b');

$array2 = array('test1','test2','test3','test4','test5','test6','test7');

$i= 0;
foreach($array2 as $option){

  if($i == 2){
    $i = 0; // reset as 0
  }
  echo $array1[$i] . ":-". $option .",<br>";
  
  $i++;
}
