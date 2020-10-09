<?php

  session_start();

  if (isset($_SESSION['user_id'])) {
    header('Location: /Proyecto/routingEnfermera.php#!/');
  }
  require 'database.php';

  if (!empty($_POST['nombre_enf']) && !empty($_POST['contrasena_enf'])) {
    $records = $conn->prepare('SELECT id_enf, nombre_enf, contrasena_enf FROM enfermera WHERE nombre_enf = :nombre_enf');
    $records->bindParam(':nombre_enf', $_POST['nombre_enf']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';
      
      if (count($results) > 0 && password_verify($_POST['contrasena_enf'], $results['contrasena_enf'])) {
      $_SESSION['user_id'] = $results['id_enf'];
      header("Location: /Proyecto/routingEnfermera.php#!/");
    } else {
      $message = 'Sorry, those credentials do not match';
    }
  }
?>
   

<div>
    
    <h1>Login</h1>
    <div class="ko">
    <span>or <a href="#!SignupEnfermera">SignUp</a></span>
    </div>
    <form class="formulario" action="pages/LoginEnfermera.php" method="POST" required>
        <input class="text" name="nombre_enf" type="text" placeholder="Nombre" required>
        <input class="text" name="contrasena_enf" type="password" placeholder="Contraseña" required>
      <input class="btn btn-warning btn-block" type="submit" value="Enviar">
    </form>
    
    
</div>