<?php

require "PHPMailer/Exception.php";
require "PHPMailer/PHPMailer.php";
require "PHPMailer/SMTP.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$oMail = new PHPMailer();
$oMail->isSMTP();
$oMail->Host="smtp.gmail.com";
$oMail->Port=587;
$oMail->SMTPSecure="tls";
$oMail->SMTPAuth=true;
$oMail->Username="vonlfgg@gmail.com"; #aqui va tu correo que vas a usar para mandar 
$oMail->Password=" 25231411"; #pos la contraseña
$oMail->setFrom("vonlfgg@gmail.com","Medical Group");
$oMail->addAddress("luisf_lutlevon@hotmail.com","Von"); #correo al que se manda y el nombre del weon 
$oMail->Subject="Verificación Registro Medical Group";
$oMail->msgHTML("href 192.168.0.14/routing.js");

if(!$oMail->send()){
	echo "lo lamentamos ocurrio un problema, intenta de nuevo";
}




?>