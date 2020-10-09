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
            echo '<th>Id Doctor</th>';
            echo '<th>Id Expediente Clinico</th>';
            echo '<th>Malestar</th>';
            echo '<th>Peso</th>';
            echo '<th>Talla</th>';
            echo '<th>Temperatura</th>';
            echo '<th>Presion Arterial</th>';
            echo '<th>Pulso Cardiaco</th>';
            while($mostrar = mysqli_fetch_array($result)){
                if($mostrar['id_doc']==$user['id_doc']){
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
            }
        
            echo "</table>";
        ?>

    </div>
