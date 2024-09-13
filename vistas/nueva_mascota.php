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

            <div class="container">
                <h2><span class="icon"><i class="fas fa-solid fa-paw"></i></span>
                    <span class="list">Registro de macostas</span>
                </h2>
                <br>
                <?php
                include './../config/conexion.php';
                $consulta = "SELECT * FROM clientes";
                $ejecutar = mysqli_query($conn, $consulta) or die(mysqli_error($conn));

                // Verifica si hay resultados en la consulta
                if (mysqli_num_rows($ejecutar) > 0): ?>
                    <form name="autentificacion_frm" action="validar_mascota.php" method="POST"
                    enctype="application/x-www-form-urlencoded" class="formx">
                    <div class="form-container">
                        <!-- 1 Column -->
                        <div class="column">
                            <div id="input-line-container">
                                <label class="name-input" for="alias">Alias</label>
                                <input type="text" id="alias" name="alias_txt" class="input-line" placeholder="Alias"
                                    maxlength="10" oninput="validarLetrasYAcentos(this)" tabindex="1" required />
                            </div>
                            <div id="input-line-container">
                                <label class="name-input" for="color_pelo">Color de pelo:</label>
                                <input type="text" id="color_pelo" name="color_pelo_txt" class="input-line"
                                    placeholder="Color de pelo" maxlength="20"
                                    oninput="validarLetrasEspaciosYAcentos(this)" required tabindex="4" />
                            </div>
                            <div id="input-line-container">
                                <label class="name-input" for="peso_actual">Peso actual (kg):</label>
                                <input type="text" id="peso_actual" name="peso_actual_txt" class="input-line"
                                    placeholder="Peso actual" maxlength="5" oninput="validarNumerosYPuntos(this)"
                                    tabindex="7" required />
                            </div>
                        </div>
                        <!-- 2 Column -->
                        <div class="column">
                            <div id="input-line-container">
                                <label class="name-input" for="especie">Especie:</label>
                                <select class="input-line" name="especie_txt" id="especie" tabindex="2" required>
                                    <option value="" disabled selected>Seleccione la especie</option>
                                    <?php
                                    include './../config/conexion.php';
                                    $consulta = "SELECT * FROM especies";
                                    $ejecutar = mysqli_query($conn, $consulta) or die(mysqli_error($conn));
                                    ?>
                                    <?php foreach ($ejecutar as $opciones): ?>
                                        <option value="<?php echo $opciones['id_especie'] ?>">
                                            <?php echo $opciones['Nombre_especie'] ?>
                                        </option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                            <div id="input-line-container">
                                <label class="name-input" for="fecha_nacimiento">Fecha de Nacimiento:</label>
                                <input type="date" id="fecha_nacimiento" name="fecha_nacimiento_txt" class="input-line"
                                    required tabindex="5" />
                            </div>
                        </div>
                        <!-- 3 Column -->
                        <div class="column">
                            <div id="input-line-container">
                                <label class="name-input" for="raza">Raza: </label>
                                <select class="input-line" name="raza_txt" id="raza" tabindex="3" required>
                                    <!-- Este select será actualizado dinámicamente por JavaScript -->
                                    <option disabled selected>Seleccione primero la especie</option>
                                </select>
                            </div>
                            <div id="input-line-container">
                                <label class="name-input" for="dueño">Agregar dueño:</label>
                                <select class="input-line" name="dueño_txt" id="dueño" tabindex="6" required>
                                    <option value="" disabled selected>Seleccione un dueño</option>
                                    <?php
                                    include './../config/conexion.php';
                                    $consulta = "SELECT * FROM clientes";
                                    $ejecutar = mysqli_query($conn, $consulta) or die(mysqli_error($conn));
                                    ?>
                                    <?php foreach ($ejecutar as $opciones): ?>
                                        <option value="<?php echo $opciones['Id_cliente'] ?>">
                                            <?php echo $opciones['Apellido_paterno'] . ' ' . $opciones['Apellido_materno'] . ' ' . $opciones['Nombre']; ?>
                                        </option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="center">
                        <button type="submit" id="btnEnviar" class="button-login1" tabindex="9">Registrar</button>
                    </div>
                </form>
                <?php else: ?>
                    <div class="formx4">
                        <center>
                            <h3>REGISTRE AL MENOS UN CLIENTE PARA PODER REGISTRAR LA MASCOTA</h3>
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

        document.getElementById('fecha_nacimiento').setAttribute('max', new Date().toISOString().split('T')[0]);

        document.addEventListener("DOMContentLoaded", function () {
            document.getElementById("alias").focus();
        });

    </script>

</body>
<script src="../js/jquery-2.2.4.min.js" type="text/javascript"></script>
<script src="../js/event2.js"></script>
<script src="../js/event5.js"></script>
<script src="../js/validadores2.js"></script>

</html>