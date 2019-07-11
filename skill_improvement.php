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

    function makeArrayConsecutive2($statues) {
        sort($statues);
        $temp = 0;
        $a = count($statues);
        if($a > 1){
            for($i = $statues[0]; $i <= $statues[$a-1]; $i ++){
                if(!in_array($i, $statues)){
                    $temp++;
                }
            }
        }
        return $temp;
    }

    function makeArrayConsecutive2D($statues) {
        $full = range(min($statues), max($statues));
        $diff = array_diff($full, $statues);
        return count($diff);
    }


    function almostIncreasingSequence($sequence) {
        $n = 0;
        for($i = 0; $i < count($sequence); $i++){
            if(isset($sequence[$i-1]) && $sequence[$i] <= $sequence[$i-1]){
                $n++;
                if(isset($sequence[$i+1]) && $sequence[$i] <= $sequence[$i-2] && $sequence[$i+1] <= $sequence[$i-1]){

                    return false;
                }
            }
        }
        return $n <= 1;
    }

    function matrixElementsSum($matrix) {
        $matrixElementsSum = 0;
        $matrix_count = count($matrix);
        for ($i = 0; $i < $matrix_count; $i++){
            foreach ($matrix[$i] as $key => $value){
                if($value == 0){
                    for($temp = $i; $temp < $matrix_count; $temp++){
                        unset($matrix[$temp][$key]);
                    }

                }else{
                    $matrixElementsSum += $value;
                }
            }
        }
        return $matrixElementsSum;
    }

    function allLongestStrings($inputArray) {
        $inputArray = ["onsfnib",
            "aokbcwthc",
            "jrfcw"];
        foreach($inputArray as $string){
            $inputArrayStringCount[] = strlen($string);
        }
        $max_value = max($inputArrayStringCount);

        $keys = array_keys($inputArrayStringCount, $max_value);
        foreach ($keys as $key){
            $return_array[] = $inputArray[$key];
        }

        return $return_array;

    }


    function domainType($domains) {

        $ext = ['com' => 'commercial', 'org' => 'organization', 'net' => 'network', 'info' => 'information'];
        foreach($domains as $domain){
            $domain_ext[] = $ext[end(explode(".",$domain))];
        }

        return $domain_ext;

    }


    function commonCharacterCount($s1, $s2) {
        $splited_s1 = array_count_values(str_split($s1));
        $splited_s2 = array_count_values(str_split($s2));
        $commonCharacterCount = 0;
        foreach ($splited_s1 as $character => $count){
            if(isset($splited_s2[$character])){
                if($splited_s2[$character] >= $count){
                    $commonCharacterCount += $count;
                }else{
                    $commonCharacterCount += $splited_s2[$character];
                }
            }
        }
        return $commonCharacterCount;
    }

    function isLucky($n) {
        $splited_value = str_split($n);
        $len = count($splited_value);
        $firsthalf = array_sum(array_slice($splited_value, 0, $len / 2));
        $secondhalf = array_sum(array_slice($splited_value, $len / 2));
        return ($firsthalf == $secondhalf)?true:false;
    }

    function sortByHeight($a) {
        $temp = $a;
        sort($temp);
        $temp = array_values(array_diff( $temp, [-1] ));
        $a_temp = array_diff( $a, [-1] );
        $i = 0;
        foreach ($a_temp as $key => $value){
            $a_temp[$key] = $temp[$i];
            $a[$key] = $a_temp[$key];
            $i++;
        }
        return $a;
    }


    function arrayChange($inputArray) {
        $count = 0;
        for ($i = 0; $i < count($inputArray)- 1; $i++) {
            while($inputArray[$i + 1] <= $inputArray[$i]) {
                $inputArray[$i + 1]++;
                $count++;
            }
        }
        return $count;
    }


    function areSimilar($a, $b) {
        $swapped = false;
        for($i=0; $i<count($a); $i++){
            if($a[$i] != $b[$i]){
                if($swapped){
                    return false;
                }else{
                    for($j=$i+1; $j<count($a); $j++){
                        if($a[$j] != $b[$j]){
                            $temp = $a[$j];
                            $a[$j] = $a[$i];
                            $a[$i] = $temp;
                            $swapped = true;
                            $i=-1;
                            break;
                        }
                    }
                }
            }
        }
        return true;
    }


    function isIPv4Address($inputString) {
        $ips = explode('.', $inputString);
        if(count($ips) == 4){
            foreach ($ips as $ip){
                if(!is_numeric($ip)){
                    return false;
                }else{
                    if(!(($ip>=0)&&($ip<=255))){
                        return false;
                    }
                }
            }
            return true;
        }else{
            return false;
        }

    }


function avoidObstacles($inputArray) {
    $jump = 2;
    $i = 0;

    while($i < count($inputArray)){
        if($inputArray[$i] % $jump === 0){
            $jump += 1;
            $i = 0;
            continue;
        }

        $i += 1;
    }

    return $jump;
}






