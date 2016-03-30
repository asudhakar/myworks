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
</html>
 -->
<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Welcome</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="css/jumbotron-narrow.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>
  </head>
  <body>
    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation" class="active"><a href="#">Home</a></li>
            <li role="presentation"><a href="http://vefetch.com/">About</a></li>
            <li role="presentation"><a href="view/login.php?action=logout">Logout</a></li>
          </ul>
        </nav>
        <h3 class="text-muted">Vefetch SMS API</h3>
      </div>
      <div class="jumbotron" style="height: 70%;">
        <p id="loading" style="display: none">Loading</p>
        <div id="output_text">
        	<h1>Welcome</h1>
        	<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>
        </div>
        

      </div>
      
      <footer class="footer">

         <p style="text-align: center">All rights are reserved by <a href="http://vefetch.com/">Vefetch</a>, by <a href="https://twitter.com/sudhakar_valar">@sudhakar</a>.</p>
      </footer>
    </div> 
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>


</body></html>