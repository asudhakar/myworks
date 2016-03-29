<?php 


    require('php-excel-reader/excel_reader2.php');

    require('SpreadsheetReader.php');

    $Reader = new SpreadsheetReader('files/test.xlsx');
   foreach ($Reader as $Row)
    {
        print_r($Row);
    }
