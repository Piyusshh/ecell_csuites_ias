<?php

$to = "piyushagrawal010@gmail.com";
$subject = "Response From Website";
$message = "I am Very Thankful to you";
$header = "From: piyushagrawal010@gmail.com";

if(mail($to, $subject, $message, $header)){
    echo "Mail Send successfully";
}else{
    echo "Cannot send mail";
}

?>