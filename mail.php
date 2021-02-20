<?php
$to = "tejareddy8303@gmail.com";
$subject = "testing..";
$message = "testing stage";
$headers = "From: tejareddy8303@gmail.com";

if (mail($to, $subject, $message, $headers)){
    echo "Mail sent sucessfully";
    }    else{
        echo "failed to send mail";
    }

?>