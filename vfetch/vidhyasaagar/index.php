<!-- 


<!DOCTYPE html>
<html>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html> -->

<?php 


    require('php-excel-reader/excel_reader2.php');

    require('SpreadsheetReader.php');

    $Reader = new SpreadsheetReader('files/CUSTOMERDETAILS.xls');
   foreach ($Reader as $Row)
    {
    	$sudhakar[$Row[1]]['name'][$Row[2]][] = $Row[3];

    }

    echo "<pre>";
    print_r($sudhakar);
    echo "</pre>";