<?php 
session_start();
	include_once '../app_functions/functions.php';
	signup_page_session_check();
	include_once '../model/db.php'; 
	include_once 'html_header.php'; 
	
?>
	<div class="site-wrapper">
    	<div class="site-wrapper-inner">
        <div class="cover-container">
          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">My App</h3>
              <nav>
                <ul class="nav masthead-nav">
                  <li><a href="../index.php">Home</a></li>
                  <li class="active"><a href="new_account.php">Create an Account</a></li>
                  <li><a href="https://sudhakarannadurai.wordpress.com/aboutme/">About Me</a></li>
                </ul>
              </nav>
            </div>
          </div>
          <div class="inner cover">
            <h1 class="cover-heading">New Account</h1>
            <form method="post" action="../controllers/sign_up.php">
              <input type="text" name="email" placeholder="Email" required class="form-control give-a-down-space" autofocus>
              <input type="password" name="password" placeholder="Password" required class="form-control give-a-down-space" >
              <input type="text" name="first_name" placeholder="First Name" class="form-control give-a-down-space" required >
              <input type="text" name="last_name" placeholder="Last Name" class="form-control give-a-down-space" required>
              <input type="date" name="dob" class="form-control give-a-down-space" required>
              <select name="gender" class="form-control give-a-down-space" required>
                <option value="female">Female</option>
                <option value="male">Male</option>
                <option value="others">She Male</option>
              </select>
              <label for="accept">
                <input name="accept" type="checkbox" value="accept" checked="checked" required> I have read and accept the terms and conditions of your organization 
              </label>
              <button class="btn btn-lg btn-success btn-block" type="submit">Sign Up</button>
            </form>
          </div>


<?php include_once 'html_footer.php'; ?>