<?php
  session_start();

  require 'database.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id_enf, nombre_enf, apellido_enf, contrasena_enf FROM enfermera WHERE id_enf = :id_enf');
    $records->bindParam(':id_enf', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
  }
?>