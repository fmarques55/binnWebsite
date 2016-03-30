<?php

    if (isset($_POST["enviar"])) {
            $name = $_POST['c_name'];
            $email = $_POST['c_email'];
            $message = $_POST['c_message'];
            // $human = intval($_POST['human']);
            $from = 'Demo Contact Form';
            $to = 'lucascmrosa@gmail.com';
            $subject = 'Contato BINN';

            $body = "From: $name\n E-Mail: $email\n Message:\n $message";
            $result = 1;
            // Check if name has been entered
            if (!$_POST['c_name']) {
                $result = 'Please enter your name';
            }

            // Check if email has been entered and is valid
            if (!$_POST['c_email']) {
                $result = 'Please enter a valid email address';
            }

            //Check if message has been entered
            if (!$_POST['c_message']) {
                $result = 'Please enter your message';
            }
            //Check if simple anti-bot test is correct
            // if ($human !== 5) {
            //     $errHuman = 'Your anti-spam is incorrect';
            // }
    // If there are no errors, send the email
    if ($result==1) {
        if (mail ($to, $subject, $body, $from)) {
            $result='<div class="alert alert-success">Thank You! I will be in touch</div>';
        } else {
            $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
        }
    }
    }
?>
