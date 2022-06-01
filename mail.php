<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = "adityashukla832@gmail.com";
$subject = "Mail From user";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@aditya.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("mail.html");
?>
