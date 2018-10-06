<?php
$recepient = 'mr.random258258@gmail.com';
$site = 'Bootstrap Site';

$name = trim($_GET['name']);
$email = trim($_GET['email']);
$subject = trim($_GET['subject']);
$message = trim($_GET['message']);

$message_on_email = "Name: $name \nE-mail: $email \nSubject: $subject \nMessage: $message";

$pagetitle = "New request from bootstrap site \"$sitename\"";
mail($recepient, $pagetitle, $message_on_email, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");
?>