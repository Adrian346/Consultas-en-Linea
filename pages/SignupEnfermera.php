<?php

  require 'database.php';

  $message = '';

  if (!empty($_POST['nombre_enf']) && !empty($_POST['apellido_enf']) && !empty($_POST['cedula_enf']) && !empty($_POST['contrasena_enf'])) {
    $sql = "INSERT INTO enfermera (nombre_enf, apellido_enf, cedula_enf, contrasena_enf) VALUES (:nombre_enf, :apellido_enf, :cedula_enf, :contrasena_enf)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nombre_enf', $_POST['nombre_enf']);
    $stmt->bindParam(':apellido_enf', $_POST['apellido_enf']);
    $stmt->bindParam(':cedula_enf', $_POST['cedula_enf']);
    $contrasena_doc = password_hash($_POST['contrasena_enf'], PASSWORD_BCRYPT);
    $stmt->bindParam(':contrasena_enf', $contrasena_doc);
      
    if ($stmt->execute()) {
      $message = 'Successfully created new user';
      header("Location: /Proyecto/routingEnfermera.php#!/Enfermera");
    } else {
      $message = 'Sorry there must have been an issue creating your account';
    }
  }
?> 

<div>
    
    <h1>SignUp</h1>
    <div class="ko">
    <span>or <a href="#!Enfermera">Login</a></span>
    </div>
    <form class="formulario" action="pages/SignupEnfermera.php" method="POST" required>
        <input class="text"name="nombre_enf" type="text" placeholder="Nombre" required>
        <input class="text"name="apellido_enf" type="text" placeholder="Apellido" required>
        <input class="text"name="cedula_enf" type="text" placeholder="Cedula" required>
        <input class="text"name="contrasena_enf" type="password" placeholder="Contraseña" required>
        <input class="btn btn-warning btn-block"type="submit" value="Enviar">
    </form>
    
</div>