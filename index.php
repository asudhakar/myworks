<?php 


    $username = $_GET['username'] ?? $_POST['username'] ?? 'sun';
    $password = $_GET['password'] ?? $_POST['password'] ?? 'live';

    echo $username;
    echo $password;