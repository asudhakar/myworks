<?php

    $array1 = [
        'A' => 'Apple',
        'B' => 'Ball',
        'C' => 'Cat',
        'E' => 'Eagle',
        'F' => 'Fan'
    ];


    $array2 = [
        'A' => 'apple is a fruit',
        'B' => 'ball is used to play',
        'C' => 'cat is an animal',
        'D' => '',
        'E' => 'eagle is a bird',
        'F' => ''
    ];

    // default
    $arr4 = [];
    if ($arr3 = array_intersect_key($array1, $array2)) {
        foreach ($arr3 as $k => $v) {
            $arr4[$v] = $array2[$k];
        }
    }

    print_r($arr4);

    //omitted

echo "<hr/>";
    $result = [];

    foreach($array2 as $key => $value)
    {
        if(!empty($value) && isset($array1[$key]))
            $result[$array1[$key]] = $value;
    }


    echo '<pre>';
    print_r($result);
    echo '</pre>';