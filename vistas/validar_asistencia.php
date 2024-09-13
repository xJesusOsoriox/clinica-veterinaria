<?php
session_start();
require("../config/conexion.php");

$Asistencia = $_POST['asistencia_txt'];

if ($Asistencia == '2') {

    // Recoger datos del formulario
    $Folio = $_POST['folio_txt'];
    $Id_Mascota = $_POST['id_mascota_txt'];
    $Fecha = $_POST['fechaCita_txt'];
    $Hora = $_POST['horaCita_txt'];
    $Servicio = $_POST['servicio_txt'];
    $Nota = $_POST['Nota_txt'];
    $Alias = $_POST['alias_txt'];
    $Especie = $_POST['especie_txt'];
    $FechaNac = $_POST['fecha_nacimiento_txt'];
    $ColorPelo = $_POST['color_pelo_txt'];
    $PesoAnterior = $_POST['peso_anterior_txt'];
    $PesoActual = 0;
    $Asistencia = 2;
    // Iniciar la transacción
    $conn->begin_transaction();

    // Preparar la consulta para insertar los datos en la tabla `consultas`
    $sql1 = "INSERT INTO consultas (Folio, Id_mascota, Fecha, Hora, Servicio, Nota, Alias, Especie, Fecha_nac, Color_pelo, Peso_ant, Peso_act, Asistencia) 
VALUES ('$Folio', '$Id_Mascota', '$Fecha', '$Hora', '$Servicio', '$Nota', '$Alias', '$Especie', '$FechaNac', '$ColorPelo', '$PesoAnterior', '$PesoActual', '$Asistencia')";

    // Ejecutar la consulta
    if ($conn->query($sql1) === TRUE) {
        // Preparar la consulta para actualizar el campo "Asistencia" en la tabla `citas`
        $sql2 = "UPDATE citas SET Asistencia = '$Asistencia' WHERE Folio = '$Folio'";

        // Ejecutar la consulta de actualización
        if ($conn->query($sql2) === TRUE) {
            $conn->commit();
            echo ".";
            echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';
            echo '<script>';
            echo 'Swal.fire({';
            echo '  icon: "success",';
            echo '  title: "Registrado!",';
            echo '  text: "Asistencia registrada correctamente.",';
            echo '}).then(() => {';
            echo '  window.location.href = "consultar_cita.php";';
            echo '});';
            echo '</script>';
        } else {
            // Revertir la transacción si el primer INSERT falla
            $conn->rollback();
            echo "No se registraron los datos";
        }
    } else {
        // Revertir la transacción si el INSERT falla
        $conn->rollback();
        echo "No se registraron los datos";
    }
} else {

    // Recoger datos del formulario
    $Folio = $_POST['folio_txt'];
    $Id_Mascota = $_POST['id_mascota_txt'];
    $Fecha = $_POST['fechaCita_txt'];
    $Hora = $_POST['horaCita_txt'];
    $Servicio = $_POST['servicio_txt'];
    $Nota = $_POST['Nota_txt'];
    $Alias = $_POST['alias_txt'];
    $Especie = $_POST['especie_txt'];
    $FechaNac = $_POST['fecha_nacimiento_txt'];
    $ColorPelo = $_POST['color_pelo_txt'];
    $PesoAnterior = $_POST['peso_anterior_txt'];
    $PesoActual = $_POST['peso_actual_txt'];
    $Asistencia = 1;

    // Iniciar la transacción
    $conn->begin_transaction();

    // Preparar la consulta para insertar los datos en la tabla `consultas`
    $sql1 = "INSERT INTO consultas (Folio, Id_mascota, Fecha, Hora, Servicio, Nota, Alias, Especie, Fecha_nac, Color_pelo, Peso_ant, Peso_act, Asistencia) 
VALUES ('$Folio', '$Id_Mascota', '$Fecha', '$Hora', '$Servicio', '$Nota', '$Alias', '$Especie', '$FechaNac', '$ColorPelo', '$PesoAnterior', '$PesoActual', '$Asistencia')";

    // Ejecutar la consulta
    if ($conn->query($sql1) === TRUE) {
        // Preparar la consulta para actualizar el campo "Asistencia" en la tabla `citas`
        $sql2 = "UPDATE citas SET Asistencia = '$Asistencia' WHERE Folio = '$Folio'";

        // Ejecutar la consulta de actualización
        if ($conn->query($sql2) === TRUE) {
            $conn->commit();
            echo ".";
            echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';
            echo '<script>';
            echo 'Swal.fire({';
            echo '  icon: "success",';
            echo '  title: "Registrado!",';
            echo '  text: "Asistencia registrada correctamente.",';
            echo '}).then(() => {';
            echo '  window.location.href = "consultar_cita.php";';
            echo '});';
            echo '</script>';
        } else {
            // Revertir la transacción si el primer INSERT falla
            $conn->rollback();
            echo "No se registraron los datos";
        }
    } else {
        // Revertir la transacción si el INSERT falla
        $conn->rollback();
        echo "No se registraron los datos";
    }
}


?>