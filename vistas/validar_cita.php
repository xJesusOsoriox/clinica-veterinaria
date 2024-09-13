<?php
session_start();
require("../config/conexion.php");

$Folio = $_POST['folio_txt'];
$Fecha = $_POST['fecha_cita_txt'];
$Hora = $_POST['hora_cita_txt'];
$Servicio = $_POST['servicio_txt'];
$Nota = $_POST['nota_txt'];
$Asistencia = "3";
$Cliente = $_POST['cliente_txt'];
$Paciente = $_POST['paciente_txt'];

?>

<?php

$sql1 = "INSERT INTO citas (Folio, Fecha, Hora, Servicio, Nota_motivo, Asistencia, Cliente, Paciente) 
VALUES ('$Folio','$Fecha', '$Hora', '$Servicio', '$Nota', '$Asistencia','$Cliente', '$Paciente')";

if ($conn->query($sql1) === TRUE) {
    $conn->commit();
    echo ".";
    echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';
    echo '<script>';
    echo 'Swal.fire({';
    echo '  icon: "success",';
    echo '  title: "Cita agendada!",';
    echo '  html: "Cita agendada correctamente.<br>El folio de la cita es: <strong>' . $Folio . '</strong>",';
    echo '}).then(() => {';
    echo '  window.location.href = "consultar_cita.php";';
    echo '});';
    echo '</script>';
} else {
    // Revertir la transacción si el primer INSERT falla
    $conn->rollback();
    echo "No se registraron los datos";
}
?>