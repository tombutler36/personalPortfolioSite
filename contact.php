<?php
echo "<pre>";

    $message_sent = false;

    if(isset($_POST['email']) && $_POST['email'] != ''){

        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){

            $fullName = $_POST['name'];
            $userEmail = $_POST['email'];
            $subject = $_POST['subject'];
            $message = $_POST['message'];

            $to = "tombutler368@gmail.com";
            $body = "";

            $body .= "From: ".$fullName. "\r\n";
            $body .= "Email: ".$userEmail. "\r\n";
            $body .= "Message: ".$message. "\r\n";

            mail($to, $subject, $body);
            header("Location: index.php?mailsend");

            $message_sent = true;

        }

    }

    

echo '</pre>'

?>