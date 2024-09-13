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
$id_mascota = $_GET['id_mascota'];
$consulta = "SELECT * FROM citas WHERE Paciente = '$id_mascota'";
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
                            <a href="#" class="active">
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
                            <a href="#">
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
            <?php
            $hay_historial = false;
            foreach ($solicitudes as $solicitud) {
                $id_paciente = $solicitud['Paciente'];
                $consulta = "SELECT * FROM mascotas WHERE id_mascota='$id_paciente'";
                $resultado = mysqli_query($conn, $consulta);

                if ($resultado && $row = $resultado->fetch_array()) {
                    $Mascota = $row['Alias'];
                    $hay_historial = true;
                }
            }
            ?>
            <div class="container">
                <?php if ($hay_historial) { ?>
                    <h2><span class="icon"><i class="fas fa-scroll"></i></span>
                        <span class="list">Historial médico:
                            <?php echo '<span style="color: #9574e7;">' . $Mascota . '</span>'; ?></span>
                    </h2>
                    <br>
                    <div class="centerL">
                        <input class="buscadorx" type="text" id="busqueda" placeholder="Codigo" onkeyup="filtrado()"
                            oninput="validarNumerosYLetras(this)">
                    </div>
                    <div class="formx4">
                        <div class="container-page">
                            <div class="login-container">
                                <div class="row">
                                    <table class="tabla4">
                                        <thead>
                                            <tr>
                                                <th width="20%">Fecha</th>
                                                <th width="30%">Servicio</th>
                                                <th width="650px">Enfermedad o motivo</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($solicitudes as $solicitud) { ?>
                                                <tr>
                                                    <td>
                                                        <?php echo $solicitud['Fecha']; ?>
                                                    </td>
                                                    <?php
                                                    $Serv = $solicitud['Servicio'];
                                                    $consulta = "SELECT * FROM servicios WHERE id_servicio='$Serv'";
                                                    $resultado = mysqli_query($conn, $consulta);
                                                    if ($resultado && $row = $resultado->fetch_array()) {
                                                        $Servicio = $row['Nombre_servicio'];
                                                    }
                                                    ?>
                                                    <td>
                                                        <?php echo $Servicio; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $solicitud['Nota_motivo']; ?>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } else { ?>
                    <h2><span class="icon"><i class="fas fa-scroll"></i></span>
                        <span class="list">Historial médico</span>
                    </h2>
                    <br>
                    <div class="formx4">
                         <center><h3>NO SE ENCONTRÓ HISTORIAL MÉDICO PARA ESTE PACIENTE</h3></center>
                    </div>
                <?php } ?>
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

</body>
<script src="../js/jquery-2.2.4.min.js" type="text/javascript"></script>
<script src="../js/event2.js"></script>
<script src="../js/event5.js"></script>
<script src="../js/validadores2.js"></script>

</html>