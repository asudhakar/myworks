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
    	echo "<pre>";
        print_r($Row);
        echo "</pre>";
    }
