<?php

    // if (isset($_POST["enviar"])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];
            // $human = intval($_POST['human']);
            $from = 'Enviado pelo contato do site';
            $to = 'lucascmrosa@gmail.com';
            $subject = 'Contato BINN';

            $body = "From: $name\n E-Mail: $email\n Message:\n $message";
            $result = 1;
            // Check if name has been entered
            // if (!$_POST['c_name']) {
            //     $result = 'Entre com seu nome';
            // }
            //
            // // Check if email has been entered and is valid
            // if (!$_POST['c_email']) {
            //     $result = 'Entre com o email';
            // }
            //
            // //Check if message has been entered
            // if (!$_POST['c_message']) {
            //     $result = 'Entre com a mensagem';
            // }
            //Check if simple anti-bot test is correct
            // if ($human !== 5) {
            //     $errHuman = 'Your anti-spam is incorrect';
            // }
    // If there are no errors, send the email
    if ($result==1) {
        if (mail ($to, $subject, $body, $from)) {
          echo "success";
        } else {
            echo "invalid";
        }
    }
    // }
?>
