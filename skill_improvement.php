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
        $adjacent_products_pos[] = 0;
        $adjacent_products_neg[] = 0;
        for(;$i < count($inputArray);){
            $adjacent_products_value = $inputArray[$i]*$inputArray[$i+1];
            if($adjacent_products_value > 0){
                $adjacent_products_pos[] =  $adjacent_products_value;
            }else{
                $adjacent_products_neg[] = abs($adjacent_products_value);
            }
            $i++;
        }
        $max_positive_adjacent_product_value = max($adjacent_products_pos);
        $max_negative_adjacent_product_value = max($adjacent_products_neg);
        return ($max_positive_adjacent_product_value > $max_negative_adjacent_product_value)?(-1 * abs($max_negative_adjacent_product_value)):$max_positive_adjacent_product_value;
    }

