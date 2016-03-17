<?php 
session_start();
if(!isset($_GET['action'])){
  include_once '../app_functions/functions.php';
  login_page_session_check();
  include_once 'html_header.php'; 
  $show_error = $_GET['error'];
} else{
  session_destroy();
  header("location: login.php");
}
	
?>
	<div class="site-wrapper">
    	<div class="site-wrapper-inner">
        <div class="cover-container">
          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">My App</h3>
              <nav>
                <ul class="nav masthead-nav">
                  <li class="active"><a href="../index.php">Home</a></li>
                  <li><a href="new_account.php">Create an Account</a></li>
                  <li><a href="https://sudhakarannadurai.wordpress.com/aboutme/">About Me</a></li>
                </ul>
              </nav>
            </div>
          </div>
          <?php if(isset($_GET['error'])&&$_GET['error']=='show_error'){ ?>


          <div class="alert alert-danger"><strong>Error!</strong> Username or Password is incorrect</div>

          <?php } ?>

          <div class="inner cover">
            <h1 class="cover-heading">Login</h1>
            <form method="post" action="../controllers/login.php">
              <input type="text" name="username" placeholder="Username / Email" required class="form-control give-a-down-space" autofocus>

              <input type="password" name="password" placeholder="Password" required class="form-control give-a-down-space" >
              <input class="btn btn-lg btn-success btn-block" type="submit" name="submit" value="Login">
            </form>
          </div>

       
<?php include_once 'html_footer.php';?>


