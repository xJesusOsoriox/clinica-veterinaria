<?php
session_start();
require("../config/conexion.php");

$Tipo_serv = $_POST['tipo_serv_txt'];

if ($Tipo_serv == 1) {
    $Nombre = $_POST['nombre_vacuna_txt'];
    $Descrip = $_POST['descripcion_txt'];
    $Tipo_serv = $_POST['tipo_serv_txt'];
    $Especie = $_POST['especie_txt'];

    $sql1 = "INSERT INTO servicios (Nombre_servicio, Descripción, Tipo_servicio, Especie) VALUES ('$Nombre', '$Descrip', '$Tipo_serv', '$Especie')";

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
        echo '  window.location.href = "lista_prod_serv.php";';
        echo '});';
        echo '</script>';
    } else {
        // Revertir la transacción si el primer INSERT falla
        $conn->rollback();
        echo "No se registraron los datos";
    }
} else if ($Tipo_serv == 2) {
    $Nombre = $_POST['nombre_consulta_txt'];
    $Descrip = $_POST['descripcion_txt'];
    $Tipo_serv = $_POST['tipo_serv_txt'];
    $Especie = "18";

    $sql1 = "INSERT INTO servicios (Nombre_servicio, Descripción, Tipo_servicio, Especie) VALUES ('$Nombre', '$Descrip', '$Tipo_serv', '$Especie')";

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
        echo '  window.location.href = "lista_prod_serv.php";';
        echo '});';
        echo '</script>';
    } else {
        // Revertir la transacción si el primer INSERT falla
        $conn->rollback();
        echo "No se registraron los datos";
    }
} else if ($Tipo_serv == 3) {
    $Nombre = $_POST['nombre_tratamiento_txt'];
    $Descrip = $_POST['descripcion_txt'];
    $Tipo_serv = $_POST['tipo_serv_txt'];
    $Especie = "18";

    $sql1 = "INSERT INTO servicios (Nombre_servicio, Descripción, Tipo_servicio, Especie) VALUES ('$Nombre', '$Descrip', '$Tipo_serv', '$Especie')";

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
        echo '  window.location.href = "lista_prod_serv.php";';
        echo '});';
        echo '</script>';
    } else {
        // Revertir la transacción si el primer INSERT falla
        $conn->rollback();
        echo "No se registraron los datos";
    }
} else if ($Tipo_serv == 4) {
    $Nombre = $_POST['nombre_cirugia_txt'];
    $Descrip = $_POST['descripcion_txt'];
    $Tipo_serv = $_POST['tipo_serv_txt'];
    $Especie = "18";

    $sql1 = "INSERT INTO servicios (Nombre_servicio, Descripción, Tipo_servicio, Especie) VALUES ('$Nombre', '$Descrip', '$Tipo_serv', '$Especie')";

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
        echo '  window.location.href = "lista_prod_serv.php";';
        echo '});';
        echo '</script>';
    } else {
        // Revertir la transacción si el primer INSERT falla
        $conn->rollback();
        echo "No se registraron los datos";
    }
} else if ($Tipo_serv == 5) {
    $Nombre = $_POST['procedimiento_odontologico_txt'];
    $Descrip = $_POST['descripcion_txt'];
    $Tipo_serv = $_POST['tipo_serv_txt'];
    $Especie = "18";

    $sql1 = "INSERT INTO servicios (Nombre_servicio, Descripción, Tipo_servicio, Especie) VALUES ('$Nombre', '$Descrip', '$Tipo_serv', '$Especie')";

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
        echo '  window.location.href = "lista_prod_serv.php";';
        echo '});';
        echo '</script>';
    } else {
        // Revertir la transacción si el primer INSERT falla
        $conn->rollback();
        echo "No se registraron los datos";
    }
} else if ($Tipo_serv == 6) {
    $Nombre = $_POST['nombre_diagnostico_txt'];
    $Descrip = $_POST['descripcion_txt'];
    $Tipo_serv = $_POST['tipo_serv_txt'];
    $Especie = "18";

    $sql1 = "INSERT INTO servicios (Nombre_servicio, Descripción, Tipo_servicio, Especie) VALUES ('$Nombre', '$Descrip', '$Tipo_serv', '$Especie')";

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
        echo '  window.location.href = "lista_prod_serv.php";';
        echo '});';
        echo '</script>';
    } else {
        // Revertir la transacción si el primer INSERT falla
        $conn->rollback();
        echo "No se registraron los datos";
    }
} else if ($Tipo_serv == 7) {
    $Nombre = $_POST['nombre_analisis_txt'];
    $Descrip = $_POST['descripcion_txt'];
    $Tipo_serv = $_POST['tipo_serv_txt'];
    $Especie = "18";

    $sql1 = "INSERT INTO servicios (Nombre_servicio, Descripción, Tipo_servicio, Especie) VALUES ('$Nombre', '$Descrip', '$Tipo_serv', '$Especie')";

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
        echo '  window.location.href = "lista_prod_serv.php";';
        echo '});';
        echo '</script>';
    } else {
        // Revertir la transacción si el primer INSERT falla
        $conn->rollback();
        echo "No se registraron los datos";
    }
} else if ($Tipo_serv == 8) {
    $Nombre = $_POST['nombre_hospitalizacion_txt'];
    $Descrip = $_POST['descripcion_txt'];
    $Tipo_serv = $_POST['tipo_serv_txt'];
    $Especie = "18";

    $sql1 = "INSERT INTO servicios (Nombre_servicio, Descripción, Tipo_servicio, Especie) VALUES ('$Nombre', '$Descrip', '$Tipo_serv', '$Especie')";

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
        echo '  window.location.href = "lista_prod_serv.php";';
        echo '});';
        echo '</script>';
    } else {
        // Revertir la transacción si el primer INSERT falla
        $conn->rollback();
        echo "No se registraron los datos";
    }
} else if ($Tipo_serv == 9) {
    $Nombre = $_POST['evaluacion_nutricional_txt'];
    $Descrip = $_POST['descripcion_txt'];
    $Tipo_serv = $_POST['tipo_serv_txt'];
    $Especie = "18";

    $sql1 = "INSERT INTO servicios (Nombre_servicio, Descripción, Tipo_servicio, Especie) VALUES ('$Nombre', '$Descrip', '$Tipo_serv', '$Especie')";

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
        echo '  window.location.href = "lista_prod_serv.php";';
        echo '});';
        echo '</script>';
    } else {
        // Revertir la transacción si el primer INSERT falla
        $conn->rollback();
        echo "No se registraron los datos";
    }
} else if ($Tipo_serv == 10) {
    $Nombre = $_POST['tipo_atencion_txt'];
    $Descrip = $_POST['descripcion_txt'];
    $Tipo_serv = $_POST['tipo_serv_txt'];
    $Especie = "18";

    $sql1 = "INSERT INTO servicios (Nombre_servicio, Descripción, Tipo_servicio, Especie) VALUES ('$Nombre', '$Descrip', '$Tipo_serv', '$Especie')";

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
        echo '  window.location.href = "lista_prod_serv.php";';
        echo '});';
        echo '</script>';
    } else {
        // Revertir la transacción si el primer INSERT falla
        $conn->rollback();
        echo "No se registraron los datos";
    }
} else if ($Tipo_serv == 11) {
    $Nombre = $_POST['tipo_servicio_txt'];
    $Descrip = $_POST['descripcion_txt'];
    $Tipo_serv = $_POST['tipo_serv_txt'];
    $Especie = "18";

    $sql1 = "INSERT INTO servicios (Nombre_servicio, Descripción, Tipo_servicio, Especie) VALUES ('$Nombre', '$Descrip', '$Tipo_serv', '$Especie')";

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
        echo '  window.location.href = "lista_prod_serv.php";';
        echo '});';
        echo '</script>';
    } else {
        // Revertir la transacción si el primer INSERT falla
        $conn->rollback();
        echo "No se registraron los datos";
    }
}
?>