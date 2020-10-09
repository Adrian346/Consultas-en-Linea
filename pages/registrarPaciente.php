<?php
  session_start();
  require 'database.php';

  $message = '';

    if (isset($_SESSION['user_id'])) {
        $records = $conn->prepare('SELECT id_enf FROM enfermera');// WHERE id_enf = 1');
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);

        $id = $results['id_enf'];
    }


  if (!empty($_POST['nombre_pac']) && !empty($_POST['apellido_pac']) && !empty($_POST['edad']) && !empty($_POST['sexo']) && !empty($_POST['historial_clinico']) && !empty($_POST['notas_medicas']) && !empty($_POST['resultados']) && !empty($_POST['poblacion']) && !empty($_POST['enfermedad_previa']) && !empty($_POST['fecha'])) {
    $sql = "INSERT INTO expedienteclinico_paciente (id_enf, nombre_pac, apellido_pac, edad, sexo, historial_clinico, notas_medicas, resultados, poblacion, enfermedad_previa, fecha) VALUES ($id, :nombre_pac, :apellido_pac, :edad, :sexo, :historial_clinico, :notas_medicas, :resultados, :poblacion, :enfermedad_previa, :fecha)";
    $stmt = $conn->prepare($sql);
      
    $stmt->bindParam(':nombre_pac', $_POST['nombre_pac']);
    $stmt->bindParam(':apellido_pac', $_POST['apellido_pac']);
    $stmt->bindParam(':edad', $_POST['edad']);
    $stmt->bindParam(':sexo', $_POST['sexo']);
    $stmt->bindParam(':historial_clinico', $_POST['historial_clinico']);
    $stmt->bindParam(':notas_medicas', $_POST['notas_medicas']);
    $stmt->bindParam(':resultados', $_POST['resultados']);
    $stmt->bindParam(':poblacion', $_POST['poblacion']);
    $stmt->bindParam(':enfermedad_previa', $_POST['enfermedad_previa']);
    $stmt->bindParam(':fecha', $_POST['fecha']);
      
    if ($stmt->execute()) {
      $message = 'Successfully created new pac';
        header('Location: /Proyecto/routingEnfermera.php#!/consulta');
    } else {
      $message = 'Sorry there must have been an issue creating your account';
    }
  }
?> 

<div>

    <h1>SignUp</h1>

    <form class="formulario" action="pages/registrarPaciente.php" method="POST">
        <input class="text" name="nombre_pac" type="text" placeholder="Nombre" required>
        <input class="text" name="apellido_pac" type="text" placeholder="Apellido" required>
        <input class="text" name="edad" type="number" placeholder="Edad" required>
        <select class="text" name="sexo" required>
            <option value="H">Hombre</option>
            <option value="M">Mujer</option>
        </select>
        <input class="text" name="historial_clinico" type="text" placeholder="Historial Clinico" required>
        <input class="text" name="notas_medicas" type="text" placeholder="Notas Medicas" required>
        <input class="text" name="resultados" type="text" placeholder="Resultados" required>
        <input class="text" name="poblacion" type="text" placeholder="Poblacion" required>
        <input class="text"name="enfermedad_previa" type="text" placeholder="Enfermedad Previa" required>
        <input class="text" name="fecha" type="date" placeholder="Poblacion" required>
          <input class="btn btn-warning btn-block" type="submit" value="Submit">
    </form>
    
</div>