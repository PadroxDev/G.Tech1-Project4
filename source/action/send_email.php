<?php
require_once "cfg/config.php";
$destinationEmail = "antoinevollet.gaming@gmail.com";
$senderName = $POST['name'];
$senderEmail = $_POST['email'];
$content = $_POST['content'];
$object = "Sender: ".$senderName." | Recontact email: ".$senderEmail;
$headers = array('MIME-Version: 1.0','Content-type: text/html; charset=utf8');
echo $senderName;
echo $senderEmail;
echo $object;
echo $content;
if (mail($destinationEmail, $object, $content, $headers)) {
    echo "Your message has been sent succesfully ! Check your e-mail box for any answer."
} else {
    echo "Your mail has not been sent successfully... Please try again."
}
?>