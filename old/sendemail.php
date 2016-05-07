<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: CustomerRequest';
    $to = 'vefetchtechnologies@gmail.com';
    $subject = 'CustomerRequest';
    $human = "4";
  //  $human = $_POST['human'];

    $body = " From: $name\n\n E-Mail: $email\n\n Message: $message";

    if ($_POST['submit']) {
        if ($name != '' && $email != '') {
            if ($human == '4') {
                if (mail ($to, $subject, $body, $from)) {
                header( "refresh:2;url=index.html" );
                  echo '<p> <h2> Your message has been sent! </h2></p>';
                } else {
                    echo '<p>Something went wrong, go back and try again!</p>';
                }
            } else if ($_POST['submit'] && $human != '4') {
                echo '<p>You answered the anti-spam question incorrectly!</p>';
            }
        } else {
            echo '<p>You need to fill in all fields!!</p>';
        }
    }
?>