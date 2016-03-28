<?php 


    require('php-excel-reader/excel_reader2.php');

    require('SpreadsheetReader.php');

    $Reader = new SpreadsheetReader('test.xlsx');
    print_r($Reader);
