<?php
session_start();
require("../config/conexion.php");

$Id_cliente = $_POST['id_cliente_txt'];
$Id_contacto = $_POST['contacto_txt'];

$sql1 = "INSERT INTO contactos (id_contacto, id_Cliente) 
VALUES ('$Id_contacto','$Id_cliente')";

if ($conn->query($sql1) === TRUE) {
    $conn->commit();
    echo ".";
    echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';
    echo '<script>';
    echo 'Swal.fire({';
    echo '  icon: "success",';
    echo '  title: "Registrado!",';
    echo '  text: "Cliente registrado correctamente",';
    echo '}).then(() => {';
    echo '  window.location.href = "ver_perfil_c.php?Id_cliente=' . $Id_cliente . '";';
    echo '});';
    echo '</script>';
} else {
    // Revertir la transacción si el primer INSERT falla
    $conn->rollback();
    echo "No se registraron los datos";
}
?>