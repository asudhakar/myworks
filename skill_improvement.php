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

