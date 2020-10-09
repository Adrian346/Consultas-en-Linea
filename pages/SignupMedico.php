<?php

require "PHPMailer/Exception.php";
require "PHPMailer/PHPMailer.php";
require "PHPMailer/SMTP.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
if (!empty($_POST['nombre_doc']) && !empty($_POST['apellido_doc']) && !empty($_POST['cedula_doc']) && !empty($_POST['correo']) && !empty($_POST['contrasena_doc'])) {
$nombre_doc = $_POST['nombre_doc'];
$apellido_doc = $_POST['apellido_doc'];
$cedula_doc = $_POST['cedula_doc'];
$correo = $_POST['correo'];
$contrasena_doc = password_hash($_POST['contrasena_doc'], PASSWORD_BCRYPT);
    
$oMail = new PHPMailer();
$oMail->isSMTP();
$oMail->Host="smtp.gmail.com";
$oMail->Port=587;
$oMail->SMTPSecure="tls";
$oMail->SMTPAuth=true;
$oMail->Username="shetotis55555@gmail.com"; #aqui va tu correo que vas a usar para mandar 
$oMail->Password="chavalin10"; #pos la contraseña
$oMail->setFrom("shetotis55555@gmail.com","Seguro En Linea");
$oMail->addAddress("$correo","$nombre_doc"); #correo al que se manda y el nombre del weon 
$oMail->Subject="Correo de Verificacion Seguro en Linea";
$oMail->addAttachment("img/doctor2.jpg", 'doctor.jpg');
$oMail->msgHTML("Gracias por darte de alta en Seguro en Linea, por favor da click en el siguiente enlace para confirmar <a href='localhost/Proyecto/pages/confirmar.php?nombre_doc=$nombre_doc&apellido_doc=$apellido_doc&cedula_doc=$cedula_doc&correo=$correo&contrasena_doc=$contrasena_doc'>Verifica tu cuenta de doctor</a> ");

if(!$oMail->send()){
	echo "lo lamentamos ocurrio un problema, intenta de nuevo";
}else{
    echo '<script language="javascript">alert("Por favor confirma tu correo");window.location.href="../routing.php#!/"</script>';
}
}



?>

<div>
    
    <h1>SignUp</h1>
    <div class="ko">
    <span>or <a href="#!medico">Login</a></span>
    </div>
    <form class="formulario"action="pages/SignupMedico.php" method="POST" required>
        <input class="text"name="nombre_doc" type="text" placeholder="Nombre" required>
        <input class="text"name="apellido_doc" type="text" placeholder="Apellido" required>
        <input class="text"name="cedula_doc" type="text" placeholder="Cedula" required>
        <input class="text"name="correo" type="email" placeholder="Correo" required>
        <input class="text"name="contrasena_doc" type="password" placeholder="Contraseña" required>
          <input class="btn btn-warning btn-block"type="submit" value="Enviar">
    </form>
    
</div>