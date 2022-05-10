<?php
require "includeclasses/PHPmailer.php";
require "includeclasses/SMTP.php";
require "includeclasses/Exception.php";

//define name spaces
use PHPmailer\PHPmailer\PHPmailer;
//use PHPmailer\PHPmailer\SMTP;
//use PHPmailer\PHPmailer\Exception;


if(!empty($_POST['email'])){
    $email = $_POST['email'];

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug = 1;
$mail->SMTPAuth = true;
$mail->SMTPSecure="ssl";
$mail->Host = "smtp.gmail.com";

$mail->Port ="465";
$mail->IsHTML(true);
//Username to use for SMTP authentication
$mail->Username = "samighorbal7@gmail.com";
$mail->Password = "Esprit1234567";
//Set who the message is to be sent from
$mail->setFrom('samighorbal7@gmail.com', ''); //! moch lezem
//Set an alternative reply-to address
$mail->addReplyTo('samighorbal7@gmail.com', 'reply services'); //! lchkoun ymchi mail ki ya3mel reply l user
//Set who the message is to be sent to
$mail->addAddress($_POST['email'], '');
//Set the subject line
$mail->Subject="Beauty Factory";
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML(" Vous avez ajouter un produit au cart ");

//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error:"  . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}

$mail->smtpClose();
header('Location: ../view/shop.php');
}
else{
    header('Location: ../view/shop.php');
}

?>