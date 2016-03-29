<?php 


    require('../php-excel-reader/excel_reader2.php');

    require('../SpreadsheetReader.php');

    $Reader = new SpreadsheetReader('../files/CUSTOMERDETAILS.xls');
    foreach ($Reader as $Row)
    {
    	$final_output[$Row[1]]['name'][$Row[3]][] = $Row[2];
    }

    