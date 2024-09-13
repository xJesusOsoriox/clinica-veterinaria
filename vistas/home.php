<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Clinica Veterinaria</title>
    <link rel="icon" href="../images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/styles.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">

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
<?php require ("../config/conexion.php");
$consulta = "SELECT * FROM veterinarios WHERE Usuario='$user' ";
$resultado = mysqli_query($conn, $consulta);
if ($resultado) {
    while ($row = $resultado->fetch_array()) {
        $Nombre = $row['Nombre_veterinario'];
    }
} ?>

<?php require ("../config/conexion.php");
$consulta1 = "SELECT COUNT(*) AS total_clientes FROM clientes";
$resultado1 = mysqli_query($conn, $consulta1);
if ($resultado1) {
    while ($row = $resultado1->fetch_array()) {
        $Total_clientes = $row['total_clientes'];
    }
} ?>

<?php require ("../config/conexion.php");
$consulta2 = "SELECT COUNT(*) AS total_mascotas FROM mascotas";
$resultado2 = mysqli_query($conn, $consulta2);
if ($resultado2) {
    while ($row = $resultado2->fetch_array()) {
        $Total_mascotas = $row['total_mascotas'];
    }
} ?>

<?php require ("../config/conexion.php");
$consulta2 = "SELECT COUNT(*) AS total_citas FROM citas";
$resultado2 = mysqli_query($conn, $consulta2);
if ($resultado2) {
    while ($row = $resultado2->fetch_array()) {
        $Total_citas = $row['total_citas'];
    }
} ?>

<?php require ("../config/conexion.php");
$consulta2 = "SELECT COUNT(*) AS total_servicios FROM servicios";
$resultado2 = mysqli_query($conn, $consulta2);
if ($resultado2) {
    while ($row = $resultado2->fetch_array()) {
        $Total_servicios = $row['total_servicios'];
    }
} ?>

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
                            <p><?php echo $Nombre ?></p>
                        </div>
                    </div>
                    <div class="icon_wrap">
                        <div class="icon">
                            <i class="fa fa-user"></i>
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
                            <a href="home.php" class="active">
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

            <div class="container">
                <div class="item_wrap">
                    <div class="item"
                        style="border-left: 3px solid #9574e7; display: flex; justify-content: space-between; align-items: center;">
                        <div>
                            <p class="name1">CLIENTES</p>
                            <p class="name1x"><?php echo $Total_clientes ?></p>
                        </div>
                        <i class="fa fa-users" style="margin-left: auto; font-size: 30px;"></i>
                    </div>
                    <div class="item"
                        style="border-left: 3px solid #e77474; display: flex; justify-content: space-between; align-items: center;">
                        <div>
                            <p class="name2">MASCOTAS</p>
                            <p class="name1x"><?php echo $Total_mascotas ?></p>
                        </div>
                        <i class="fas fa-solid fa-paw" style="margin-left: auto; font-size: 30px;"></i>
                    </div>
                </div>
                <div class="item_wrap">
                    <div class="item"
                        style="border-left: 3px solid #59d35f; display: flex; justify-content: space-between; align-items: center;">
                        <div>
                            <p class="name3">CITAS</p>
                            <p class="name1x"><?php echo $Total_citas ?></p>
                        </div>
                        <i class="fas fa-calendar-alt" style="margin-left: auto; font-size: 30px;"></i>
                    </div>
                    <div class="item"
                        style="border-left: 3px solid #74a0e7; display: flex; justify-content: space-between; align-items: center;">
                        <div>
                            <p class="name4">PRODUCTO/SERVICIO</p>
                            <p class="name1x"><?php echo $Total_servicios ?></p>
                        </div>
                        <i class="fa fa-medkit" style="margin-left: auto; font-size: 30px;"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>
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


</html>