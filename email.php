<?php

$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = "ariesluck172@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;

if($email!=NULL){
    if(mail($to,$subject,$txt)){
   
    echo '<script>alert("message sent")</script>';
    
    }
    else
    echo '<script>alert("failed")</script>';

    header("refresh:2;url=index.html");

}


?>