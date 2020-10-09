<?php

  require 'database.php';

  $message = '';
$nombre_doc = $_GET['nombre_doc'];
$apellido_doc = $_GET['apellido_doc'];
$cedula_doc = $_GET['cedula_doc'];
$correo = $_GET['correo'];
$contrasena_doc = $_GET['contrasena_doc'];

    $sql = "INSERT INTO doctor (nombre_doc, apellido_doc, cedula_doc, correo, contrasena_doc, estado) VALUES ('$nombre_doc', '$apellido_doc', '$cedula_doc', '$correo', '$contrasena_doc', 0)";
    $stmt=$conn->prepare($sql);
      
    if ($stmt->execute()) {
      $message = 'Successfully created new user';
      header("Location: /Proyecto/routing.php#!/medico");
    } else {
      $message = 'Sorry there must have been an issue creating your account';
    }
?> 

<div>
    
    <?php require 'partials/header.php' ?>

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <h1>SignUp</h1>
    <span>or <a href="#!medico">Login</a></span>

    <form class="formulario" action="pages/SignupMedico.php" method="POST" required>
        <input class="text" name="nombre_doc" type="text" placeholder="Nombre" required>
        <input class="text" name="apellido_doc" type="text" placeholder="Apellido" required>
        <input class="text"name="cedula_doc" type="text" placeholder="Cedula" required>
        <input class="text"name="correo" type="email" placeholder="Correo" required>
        <input class="text" name="contrasena_doc" type="password" placeholder="Contraseña" required>
          <input class="btn btn-warning btn-block" type="submit" value="Enviar">
    </form>
    
</div>