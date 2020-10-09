<?php
    require 'sesion.php';
    $conexion = mysqli_connect('localhost:3307', 'root', '', 'consulta_virtual');
  require 'database.php';

  $message = '';


  if (!empty($_POST['id_doc']) && !empty($_POST['id_ExpClin']) && !empty($_POST['malestar']) && !empty($_POST['peso']) && !empty($_POST['talla']) && !empty($_POST['temperatura']) && !empty($_POST['presion_art']) && !empty($_POST['pulso_cardiaco'])) {
    $sql = "INSERT INTO consulta (id_doc, id_ExpClin, malestar, peso, talla, temperatura, presion_art, pulso_cardiaco) VALUES (:id_doc, :id_ExpClin, :malestar, :peso, :talla, :temperatura, :presion_art, :pulso_cardiaco)";
    $stmt = $conn->prepare($sql);
    
    $stmt->bindParam(':id_doc', $_POST['id_doc']);
    $stmt->bindParam(':id_ExpClin', $_POST['id_ExpClin']);
    $stmt->bindParam(':malestar', $_POST['malestar']);
    $stmt->bindParam(':peso', $_POST['peso']);
    $stmt->bindParam(':talla', $_POST['talla']);
    $stmt->bindParam(':temperatura', $_POST['temperatura']);
    $stmt->bindParam(':presion_art', $_POST['presion_art']);
    $stmt->bindParam(':pulso_cardiaco', $_POST['pulso_cardiaco']);
    
    if ($stmt->execute()) {
      $message = 'Successfully created new pac';
        header('Location: /Proyecto/routingEnfermera.php#!/');
    } else {
      $message = 'Sorry there must have been an issue creating your account';
    }
  }
?> 

<div>
    
    <?php
        
            $sql = ('SELECT * FROM expedienteclinico_paciente');
            $result = mysqli_query($conexion, $sql);
            echo '<table>';
            echo '<caption>Expedientes Clinicos</caption>';
            echo '<th>Id Expediente Clinico</th>';
            echo '<th>Id Enfermera</th>';
            echo '<th>Nombre</th>';
            echo '<th>Apellido</th>';
            echo '<th>Edad</th>';
            echo '<th>Sexo</th>';
            echo '<th>Historial Clinico</th>';
            echo '<th>Notas Medicas</th>';
            echo '<th>Resultados</th>';
            echo '<th>Poblacion</th>';
            echo '<th>Enfermedad Previa</th>';
            echo '<th>Fecha</th>';
            while($mostrar = mysqli_fetch_array($result)){
                ?>

                <tr>
                    <td><?php echo $mostrar['id_ExpClin'] ?></td>
                    <td><?php echo $mostrar['id_enf']?></td>
                    <td><?php echo $mostrar['nombre_pac']?></td>
                    <td><?php echo $mostrar['apellido_pac']?></td>
                    <td><?php echo $mostrar['edad']?></td>
                    <td><?php echo $mostrar['sexo']?></td>
                    <td><?php echo $mostrar['historial_clinico']?></td>
                    <td><?php echo $mostrar['notas_medicas']?></td>
                    <td><?php echo $mostrar['resultados']?></td>
                    <td><?php echo $mostrar['poblacion']?></td>
                    <td><?php echo $mostrar['enfermedad_previa']?></td>
                    <td><?php echo $mostrar['fecha']?></td>
                </tr>
                <?php                
            }
        
            echo "</table>";
    ?>

    <form class="formulario" action="pages/consulta.php" method="POST">
        <?php
        
            $sql = ('SELECT * FROM doctor');
            $result = mysqli_query($conexion, $sql);
            echo '<select class="text" name="id_doc">';
            while($mostrar = mysqli_fetch_array($result)){
                if($mostrar['estado']==1){
                ?>
                            
                    <option value="<?php echo $mostrar['id_doc']?>">ID: <?php echo $mostrar['id_doc']?> <?php echo $mostrar['nombre_doc'] ?> <?php echo $mostrar['apellido_doc']?></option>
        <?php                
                }
            }
        
            echo "</select>";
        ?>
        
        <?php
        
            $sql = ('SELECT * FROM expedienteclinico_paciente');
            $result = mysqli_query($conexion, $sql);
            echo '<select class="text" name="id_ExpClin">';
            while($mostrar = mysqli_fetch_array($result)){
                ?>
                
                    <option value="<?php echo $mostrar['id_ExpClin']?>">ID: <?php echo $mostrar['id_ExpClin']?> <?php echo $mostrar['nombre_pac'] ?> <?php echo $mostrar['apellido_pac']?></option>
        <?php                
            }
        
            echo "</select>";
        ?>
        
        <input class="text" name="malestar" type="text" placeholder="Malestar" required>
        <input class="text" name="peso" type="number" placeholder="Peso" required>
        <input class="text" name="talla" type="number" placeholder="Talla" required>
        <input class="text" name="temperatura" type="number" placeholder="Temperatura" required>
        <input class="text" name="presion_art" type="number" placeholder="Presión Arterial" required>
        <input class="text" name="pulso_cardiaco" type="number" placeholder="Pulso Cardiaco" required>
          <input class="btn btn-warning btn-block" type="submit" value="Enviar">
    </form>
    
</div>