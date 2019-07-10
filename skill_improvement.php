<?php
    function centuryFromYear($year) {
        if($year < 100){
            return 1;
        }else if($year < 1000){
            $new_year = $year+100;
            $new_century = intval(substr($new_year, 0, 1));
            if($new_century."00" == $new_year){
                return intval(substr($year, 0, 1));
            }else{
                return $new_century;
            }
        }else{
            $new_year = $year+100;
            $new_century = intval(substr($new_year, 0, 2));
            if($new_century."00" == $new_year){
                return intval(substr($year, 0, 2));
            }else{
                return $new_century;
            }
        }
    }


    function checkPalindrome($inputString) {
        $splited_string = str_split($inputString, 1);
        $reversed_splited_string = array_reverse($splited_string);
        $reversed_string = join("", $reversed_splited_string);
        return ($inputString == $reversed_string)?true:false;
    }

    function adjacentElementsProduct($inputArray) {
        $i = 0;
        $adjacent_products_value = [];
        $count = count($inputArray)-1;
        for(;$i < $count;){
            $adjacent_products_value[] = $inputArray[$i]*$inputArray[$i+1];
            $i++;
        }

        return max($adjacent_products_value);
    }


    function shapeArea($n) {
        return pow($n,2)+pow($n-1,2);
//        return ($n*$n)+(($n-1)*($n-1));
    }


