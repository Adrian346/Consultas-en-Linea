<?php
    require 'sesion.php';
    $conexion = mysqli_connect('localhost:3307', 'root', '', 'consulta_virtual');
  require 'database.php';


?> 

<div>
   <?php
        
            $sql = ('SELECT * FROM consulta');
            $result = mysqli_query($conexion, $sql);
            echo '<table>';
            echo '<caption>Consultas</caption>';
            echo '<th>Id Doctor</th>';
            echo '<th>Id Expediente Clinico</th>';
            echo '<th>Malestar</th>';
            echo '<th>Peso</th>';
            echo '<th>Talla</th>';
            echo '<th>Temperatura</th>';
            echo '<th>Presion Arterial</th>';
            echo '<th>Pulso Cardiaco</th>';
            while($mostrar = mysqli_fetch_array($result)){
                ?>

                <tr>
                    <td><?php echo $mostrar['id_doc'] ?></td>
                    <td><?php echo $mostrar['id_ExpClin']?></td>
                    <td><?php echo $mostrar['malestar']?></td>
                    <td><?php echo $mostrar['peso']?></td>
                    <td><?php echo $mostrar['talla']?></td>
                    <td><?php echo $mostrar['temperatura']?></td>
                    <td><?php echo $mostrar['presion_art']?></td>
                    <td><?php echo $mostrar['pulso_cardiaco']?></td>
                </tr>
                <?php                
            }
        
            echo "</table>";
    ?>
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
    <a type="button" class="btn btn-warning btn-block"
            data-toggle="tooltip" title="O llamanos 449 155 51 77"
            data-placement="bottom" href="http://localhost:9966/#init">Cita online</a>
    
</div>