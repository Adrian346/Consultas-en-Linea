<?php
    require 'sesion.php';
    $conexion = mysqli_connect('localhost:3307', 'root', '', 'consulta_virtual');
  require 'database.php';

  $message = '';
    
    $id_doc = $user['id_doc'];


  if (!empty($_POST['id_enf']) && !empty($_POST['medicamento']) && !empty($_POST['dosis_diaria']) && !empty($_POST['tiempo_meses'])) {
    $sql = "INSERT INTO receta (id_doc, id_enf, medicamento, dosis_diaria, tiempo_meses) VALUES ($id_doc, :id_enf, :medicamento, :dosis_diaria, :tiempo_meses)";
    $stmt = $conn->prepare($sql);
    
//    $stmt->bindParam(':id_doc', $_POST['id_doc']);
    $stmt->bindParam(':id_enf', $_POST['id_enf']);
    $stmt->bindParam(':medicamento', $_POST['medicamento']);
    $stmt->bindParam(':dosis_diaria', $_POST['dosis_diaria']);
    $stmt->bindParam(':tiempo_meses', $_POST['tiempo_meses']);
    
    if ($stmt->execute()) {
      $message = 'Successfully created new pac';
        header('Location: /Proyecto/routing.php#!/actualizarPaciente');
    } else {
      $message = 'Sorry there must have been an issue creating your account';
    }
  }
?> 

<div>
<br><br>
    <form class="formulario" action="pages/receta.php" method="POST">
        <?php
        
            $sql = ('SELECT * FROM doctor');
            $result = mysqli_query($conexion, $sql);
            $mostrar = mysqli_fetch_array($result);
            $mostar['id_doc'] = $user['id_doc'];
        ?>
        
        <?php
        
            $sql = ('SELECT * FROM enfermera');
            $result = mysqli_query($conexion, $sql);
            echo '<select class="text" name="id_enf" required>';
            while($mostrar = mysqli_fetch_array($result)){
                ?>
                
                    <option value="<?php echo $mostrar['id_enf']?>">ID: <?php echo $mostrar['id_enf']?> <?php echo $mostrar['nombre_enf'] ?> <?php echo $mostrar['apellido_enf']?></option>
        <?php                
            }
        
            echo "</select>";
        ?>
        
        <input class="text" name="medicamento" type="text" placeholder="Medicamento" required>
        <input class="text" name="dosis_diaria" type="number" placeholder="Dosis Diaria" required>
        <input class="text" name="tiempo_meses" type="number" placeholder="Tiempo en Meses" required>
          <input class="btn btn-warning btn-block" type="submit" value="Enviar">
    </form>
    
</div>