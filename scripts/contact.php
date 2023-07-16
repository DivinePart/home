<?php
if(isset($_POST['submit']))
{
    echo "error; you need to submit the form!";
}
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$subject = $_POST['subject'];
$message = $_POST['message'];

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