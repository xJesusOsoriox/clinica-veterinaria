<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Clinica Veterinaria</title>
    <link rel="icon" href="../images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/stylePP.css">

    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <script>
        $(document).ready(function () {
            $(".hamburger").click(function () {
                $(".wrapper").toggleClass("active")
            })
        });
    </script>

</head>
<?php include("sesion.php"); ?>

<?php $user = $_SESSION["usuario"]; ?>
<?php require("../config/conexion.php");
$consulta = "SELECT * FROM veterinarios WHERE Usuario='$user' ";
$resultado = mysqli_query($conn, $consulta);
if ($resultado) {
    while ($row = $resultado->fetch_array()) {
        $Nombre = $row['Nombre_veterinario'];
    }
} ?>

<?php
$consulta = "SELECT * FROM citas";
$resultado = mysqli_query($conn, $consulta);

$solicitudes = array();
if ($resultado) {
    while ($row = $resultado->fetch_array()) {
        $solicitudes[] = $row;
    }
}
?>

<body>

    <div class="wrapper">

        <div class="top_navbar">
            <div class="logo">
                <img class="logo1" src="../images/veterinaria.png">

            </div>
            <div class="top_menu">
                <div class="home_link">

                </div>
                <div class="right_info">
                    <div class="icon_wrap1">
                        <div class="icon">
                            <p><?php echo $Nombre; ?></p>
                        </div>
                    </div>
                    <div class="icon_wrap">
                        <div class="icon">
                            <i class="fas fa-user-md"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="main_body">

            <div class="sidebar_menu">
                <div class="inner__sidebar_menu">
                    <ul>
                        <li>
                            <a href="home.php">
                                <span class="icon">
                                    <i class="fas fa-home"></i></span>
                                <span class="list">Inicio</span>
                            </a>
                        </li>
                        <li class="submenu-item">
                            <a href="#">
                                <span class="icon"><i class="fas fa-user-alt"></i></span>
                                <span class="list flecha">Clientes</span>
                                <i class="fas fa-chevron-down"></i> <!-- Icono para indicar submenú -->
                            </a>
                            <ul class="submenu">
                                <li>
                                    <a href="nuevo_cliente.php">
                                        <span class="icon"><i class="fa fa-user-plus"></i></span>
                                        <span class="list" style="font-size: 15px;">Nuevo cliente</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="lista_clientes.php">
                                        <span class="icon"><i class="fas fa-address-book"></i></span>
                                        <span class="list" style="font-size: 15px;">Lista de clientes</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="submenu-item">
                            <a href="#">
                                <span class="icon"><i class="fas fa-solid fa-paw"></i></span>
                                <span class="list flecha">Mascotas</span>
                                <i class="fas fa-chevron-down"></i> <!-- Icono para indicar submenú -->
                            </a>
                            <ul class="submenu">
                                <li>
                                    <a href="nueva_mascota.php">
                                        <span class="icon"><i class="fas fa-hand-holding-heart"></i></span>
                                        <span class="list" style="font-size: 15px;">Nueva mascota</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="lista_mascotas.php">
                                        <span class="icon"><i class="fas fa-clipboard-list"></i></span>
                                        <span class="list" style="font-size: 15px;">Lista de mascotas</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="submenu-item">
                            <a href="#" class="active">
                                <span class="icon"><i class="fas fa-calendar-alt"></i></span>
                                <span class="list flecha">Citas</span>
                                <i class="fas fa-chevron-down"></i> <!-- Icono para indicar submenú -->
                            </a>
                            <ul class="submenu">
                                <li>
                                    <a href="nueva_cita.php">
                                        <span class="icon"><i class="fas fa-calendar-plus"></i></span>
                                        <span class="list" style="font-size: 15px;">Nueva cita</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="consultar_cita.php">
                                        <span class="icon"><i class="fas fa-calendar-week"></i></span>
                                        <span class="list" style="font-size: 15px;">Consultar citas</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="calendario_citas.php">
                                        <span class="icon"><i class="fas fa-calendar"></i></span>
                                        <span class="list" style="font-size: 15px;">Calendario de citas</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="submenu-item">
                            <a href="#">
                                <span class="icon"><i class="fa fa-book"></i></span>
                                <span class="list flecha">Inventario</span>
                                <i class="fas fa-chevron-down"></i> <!-- Icono para indicar submenú -->
                            </a>
                            <ul class="submenu">
                                <li>
                                    <a href="nuevo_prod_serv.php">
                                        <span class="icon"><i class="fas fa-book-medical"></i></span>
                                        <span class="list" style="font-size: 15px;">Nuevo prod/serv</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="lista_prod_serv.php">
                                        <span class="icon"><i class="fas fa-book-open"></i></span>
                                        <span class="list" style="font-size: 15px;">Lista de prod/serv</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="salir.php">
                                <span class="list">Salir</span>
                            </a>
                        </li>
                    </ul>


                    <div class="hamburger">
                        <div class="inner_hamburger">
                            <span class="arrow">
                                <i class="fas fa-long-arrow-alt-left"></i>
                                <i class="fas fa-long-arrow-alt-right"></i>
                            </span>
                        </div>
                    </div>


                </div>
            </div>

            <div class="container">
                <h2><span class="icon"><i class="fas fa-calendar-alt"></i></span>
                    <span class="list">Lista de citas</span>
                </h2>
                <br>
                <?php
                include './../config/conexion.php';
                $consulta = "SELECT * FROM citas";
                $ejecutar = mysqli_query($conn, $consulta) or die(mysqli_error($conn));

                // Verifica si hay resultados en la consulta
                if (mysqli_num_rows($ejecutar) > 0): ?>
                    <div class="centerL">
                        <input class="buscadorx" type="text" id="busqueda" placeholder="Codigo" onkeyup="filtrado()"
                            oninput="validarNumeros(this)">
                    </div>
                    <div class="formx4">
                        <div class="container-page">
                            <div class="login-container">
                                <div class="row">
                                    <table class="tabla4">
                                        <thead>
                                            <tr>
                                                <th width="10%">Folio</th>
                                                <th width="13%">Cliente</th>
                                                <th width="12%">Paciente</th>
                                                <th width="10%">Fecha</th>
                                                <th width="8%">Hora</th>
                                                <th width="16%">Servicio (vacuna)</th>
                                                <th width="25%">Nota</th>
                                                <th width="25%">Asistió</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php foreach ($solicitudes as $solicitud) { ?>
                                                <tr>
                                                    <td>
                                                        <?php echo $solicitud['Folio']; ?>
                                                    </td>
                                                    <?php
                                                    $Dueño = $solicitud['Cliente'];
                                                    $consulta = "SELECT * FROM clientes WHERE Id_cliente='$Dueño' ";
                                                    $resultado = mysqli_query($conn, $consulta);
                                                    if ($resultado) {
                                                        while ($row = $resultado->fetch_array()) {
                                                            $Cliente = $row['Apellido_paterno'] . ' ' . $row['Apellido_materno'] . ' ' . $row['Nombre'];
                                                        }
                                                    }
                                                    ?>
                                                    <td>
                                                        <?php echo $Cliente ?>
                                                    </td>
                                                    <?php
                                                    $Mascota = $solicitud['Paciente'];
                                                    $consulta = "SELECT * FROM mascotas WHERE id_mascota='$Mascota' ";
                                                    $resultado = mysqli_query($conn, $consulta);
                                                    if ($resultado) {
                                                        while ($row = $resultado->fetch_array()) {
                                                            $Paciente = $row['Alias'];
                                                        }
                                                    }
                                                    ?>
                                                    <td>
                                                        <?php echo $Paciente; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $solicitud['Fecha']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $solicitud['Hora']; ?>
                                                    </td>
                                                    <?php
                                                    $Servicio = $solicitud['Servicio'];
                                                    $consulta = "SELECT * FROM servicios WHERE id_servicio='$Servicio' ";
                                                    $resultado = mysqli_query($conn, $consulta);
                                                    if ($resultado) {
                                                        while ($row = $resultado->fetch_array()) {
                                                            $ServSolic = $row['Nombre_servicio'];
                                                        }
                                                    }
                                                    ?>
                                                    <td>
                                                        <?php echo $ServSolic ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $solicitud['Nota_motivo']; ?>
                                                    </td>
                                                    <?php
                                                    $asistencia = $solicitud['Asistencia'];
                                                    $claseAsistencia = '';

                                                    if ($asistencia == 1) {
                                                        $claseAsistencia = 'asistencia-verde';
                                                    } elseif ($asistencia == 2) {
                                                        $claseAsistencia = 'asistencia-rojo';
                                                    } elseif ($asistencia == 3) {
                                                        $claseAsistencia = 'asistencia-gris';
                                                    }
                                                    ?>
                                                    <!-- Cambia el color del icono según la clase asignada -->
                                                    <td>
                                                        <a href="asistencia_cita.php?Folio=<?php echo $solicitud['Folio']; ?>">
                                                            <i
                                                                class="fas fa-calendar-check x <?php echo $claseAsistencia; ?>"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="formx4">
                        <center>
                            <h3>NO HAY CITAS AGENDADAS</h3>
                        </center>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $(".submenu-item > a").click(function (e) {
                e.preventDefault();
                var $submenu = $(this).next(".submenu");
                $(".submenu").not($submenu).slideUp(); // Cierra otros submenús
                $submenu.slideToggle(); // Despliega o cierra el submenú clickeado
            });
        });
    </script>

    <script>
        function filtrado() {
            var input, filtro, tabla, filas, celda, i, txtValor;
            input = document.getElementById("busqueda");
            filtro = input.value.toUpperCase();
            tabla = document.getElementsByClassName("tabla4")[0];
            filas = tabla.getElementsByTagName("tr");

            for (i = 1; i < filas.length; i++) { // Empezamos desde 1 para omitir la fila de encabezado
                celda = filas[i].getElementsByTagName("td")[0]; // Columna del número de serie

                if (celda) {
                    txtValor = celda.textContent || celda.innerText;
                    if (txtValor.toUpperCase().indexOf(filtro) > -1) {
                        filas[i].style.display = "";

                    } else {
                        filas[i].style.display = "none";
                    }
                }
            }
        }

        document.addEventListener("DOMContentLoaded", function () {
            document.getElementById("busqueda").focus();
        });

    </script>
</body>
<script src="../js/jquery-2.2.4.min.js" type="text/javascript"></script>
<script src="../js/event2.js"></script>
<script src="../js/event5.js"></script>
<script src="../js/validadores2.js"></script>

</html>