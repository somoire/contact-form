<?php
echo "<pre>";
    print_r($_POST);
echo '</pre>';
    $userName = $_POST ['name'];
    $userEmail = $_POST ['email'];
    $message = $_POST['message'];

    $to = "piercer38@gmail.com";
    $body = "";

    $body .= "From: ".$userName. "\r\n";
    $body .= "Email: ".$userEmail. "\r\n";
    $body .= "Message: ".$message. "\r\n";

    // $email_from = 'rayr30667@gmail.com';

    $email_subject = "New Customer";

    // $email_body .=  "User Name: $name. \n".
    //                 "User Email: $visitor_email. \n".
    //                 "User Message $message. \n";

    // $headers = "From: $email_from \r\n";

    // $headers .= "Reply-To: $visitor_email \r\n";

    mail($to, $email_subject, $body);

    // header("Location: contact2.html");


?>