<?php

$subject = $_POST['subject'];
$message = $_POST['message'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];

mail("justin@kturcotte.me", $subject, $message . "\nFrom: " . $firstName . " " . $lastName . "," . $email);

readfile($_SERVER['DOCUMENT_ROOT'] . '/index.php');
?>