<?php
require_once "cfg/config.php";
$destinationEmail = "antoinevollet.gaming@gmail.com";
$senderName = $POST['name'];
$senderEmail = $_POST['email'];
$content = $_POST['content'];
$object = "Sender: ".$senderName." | Recontact email: ".$senderEmail;
$headers = array('MIME-Version: 1.0','Content-type: text/html; charset=utf8');
if (mail($destinationEmail, $object, $content, $headers)) {

} else {
    
}
?>