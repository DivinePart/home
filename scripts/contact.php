<?php
if(!isset($_GET['submit']))
{
    echo "error; you need to submit the form!";
}
$name = $_GET['name'];
$email = $_GET['email'];
$number = $_GET['number'];
$subject = $_GET['subject'];
$message = $_GET['message'];

//Validate first
if(empty($name)||empty($email))
{
    echo "Name and email are mandatory!";
    exit;
}

$to_mail = "divinepartstudio@gmail.com";
$headers = "From: E-mai:$email and Mobile Number:$number";

//Send the mail
mail($to_mail, $subject, $message, $headers);
?>
