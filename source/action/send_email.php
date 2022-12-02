<?php
require_once "../cfg/config.php";
$destinationEmail = "antoinevollet.gaming@gmail.com";
$senderName = $_POST['name'];
$senderEmail = $_POST['email'];
$content = $_POST['content'];
$object = "Sender: ".$senderName." | Recontact email: ".$senderEmail;
$headers  = "From: testsite <mail@testsite.com>\n";
$headers .= "Cc: testsite <mail@testsite.com>\n"; 
$headers .= "X-Sender: testsite <mail@testsite.com>\n";
$headers .= 'X-Mailer: PHP/' . phpversion();
$headers .= "X-Priority: 1\n"; // Urgent message!
$headers .= "Return-Path: mail@testsite.com\n"; // Return path for errors
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=iso-8859-1\n";

if (mail($destinationEmail, $object, $content, $headers)) {
    echo "Your message has been sent succesfully ! Check your e-mail box for any answer.";
} else {
    echo "Your mail has not been sent successfully... Please try again.";
}
header('Location: ../index.php');
?>