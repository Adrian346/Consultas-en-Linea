<?php

  session_start();

  if (isset($_SESSION['user_id'])) {
    header('Location: /Proyecto/routing.php#!/');
  }
  require 'database.php';

  if (!empty($_POST['correo']) && !empty($_POST['contrasena_doc'])) {
    $records = $conn->prepare('SELECT id_doc, correo, contrasena_doc FROM doctor WHERE correo = :correo');
    $records->bindParam(':correo', $_POST['correo']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';
      
      if (count($results) > 0 && password_verify($_POST['contrasena_doc'], $results['contrasena_doc'])) {
        $_SESSION['user_id'] = $results['id_doc'];
        $id = $results['id_doc'];
        $records = $conn->prepare("UPDATE doctor SET estado=1 WHERE id_doc=$id");
        $records->execute();
        
      header("Location: /Proyecto/routing.php#!/");
    } else {
      $message = 'Sorry, those credentials do not match';
    }
  }
?>
   

<div>
    
    <h1>Login</h1>
    <div class="ko">
    <span>or <a href="#!SignupMedico">SignUp</a></span>
    </div>

    <form class="formulario" action="pages/LoginMedico.php" method="POST" required>
        <input class="text" name="correo" type="email" placeholder="Correo" required>
        <input class="text" name="contrasena_doc" type="password" placeholder="Contraseña" required>
      <input class="btn btn-warning btn-block" type="submit" value="Enviar">
    </form>
    
    
</div>