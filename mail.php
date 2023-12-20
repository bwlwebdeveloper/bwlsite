<?php
//get datafrom form  

$name = $_POST['first name'];
$email= $_POST['Email'];
$message= $_POST['message'];
$to = "bwlwebsitedeveloper@gmail.com";
$subject = "Mail From bwlwebsite";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@bwlweb.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:index.html");
?>
