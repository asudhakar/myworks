<?php 
	include_once '../app_functions/functions.php';
	login_page_session_check();
	include_once '../model/db.php'; 
	include_once 'html_header.php'; 
	
?>
	<div class="site-wrapper">
    	<div class="site-wrapper-inner">
        <div class="cover-container">
          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">Uplust Clone</h3>
              <nav>
                <ul class="nav masthead-nav">
                  <li class="active"><a href="../index.php">Home</a></li>
                  <li><a href="new_account.php">Create an Account</a></li>
                  <li><a href="https://www.sudhakarannadurai.wordpress.com">About Me</a></li>
                </ul>
              </nav>
            </div>
          </div>
          <div class="inner cover">
            <h1 class="cover-heading">Login</h1>
            <input type="text" name="username" placeholder="Username / Email" required class="form-control give-a-down-space" autofocus>

            <input type="password" name="password" placeholder="Password" required class="form-control give-a-down-space" >
            <button class="btn btn-lg btn-success btn-block" type="submit">Sign in</button>
          </div>

       
<?php include_once 'html_footer.php'; ?>