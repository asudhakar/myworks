<html>

<head>

<title>User Login</title>

</head>

<body>

<form action="" method="post">

<table width="500" align="center" bgcolor="skyblue">

<tr align="center">

<td colspan="3"><h2>User Login</h2></td>

</tr>

<tr>

<td align="right"><b>Email</b></td>

<td><input type="text" name="email" required="required"/></td>

</tr>

<tr>

<td align="right"><b>Password:</b></td>

<td><input type="password" name="pass" required="required"></td>

</tr>

<tr align="center">

<td colspan="3">

<input type="submit" name="login" value="Login">

</td>

</tr>

</table>

</form>

</body>

</html>

<?php

session_start();
$con = mysqli_connect("localhost","root","","iwpstats");

if (mysqli_connect_errno())

{

    echo "MySQLi Connection was not established:"  . mysqli_connect_error();

}

// checking the user

if(isset($_POST['login'])){

    $email = mysqli_real_escape_string($con,$_POST['email']);

    $pass = mysqli_real_escape_string($con,$_POST['pass']);

    $sel_user = "SELECT * FROM users WHERE emailid ='".$email."' AND password ='".$pass."'";

    $run_user = mysqli_query($con, $sel_user);

    $check_user = mysqli_num_rows($run_user);

    if($check_user == 1){

        $_SESSION['user_email']=$email;

        header('Location: loggedin.html');

    }

    else {
        header('Location: index.html');

    }

}

?>