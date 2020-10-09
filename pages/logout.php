<?php
    require 'sesion.php';
    //session_start();
    require 'database.php';
    

    //if (isset($_SESSION['user_id'])) {
        $id_doc = $user['id_doc'];
        $records = $conn->prepare("SELECT id_doc FROM doctor WHERE id_doc = '$id_doc'");
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);

        $id = $results['id_doc'];
        $records = $conn->prepare("UPDATE doctor SET estado=0 WHERE id_doc=$id");
        $records->execute();
    //}

  session_unset();

  session_destroy();

  header('Location: /Proyecto/routing.php#!/');
?>
