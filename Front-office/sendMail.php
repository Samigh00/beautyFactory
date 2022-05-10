<?php
$to ='hassen.mabrouk@esprit.tn';
$subject ='test';
$message ='blablabla';
$header ='';
$mail_sent=mail($to,$subject,$message,$header);
if($mail_sent==true){
    echo "mail_sent";
}else{
    echo "error";
}
