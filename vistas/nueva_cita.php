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
function generate_string($strength)
{
    $prefix = 'CT-'; // Prefijo fijo
    $numbers = generate_random_numbers(6); // Generar 6 números aleatorios
    return $prefix . $numbers;
}

function generate_random_numbers($length)
{
    $input = '0123456789';
    $input_length = strlen($input);
    $random_string = '';
    for ($i = 0; $i < $length; $i++) {
        $random_character = $input[mt_rand(0, $input_length - 1)];
        $random_string .= $random_character;
    }
    return $random_string;
}
$Folio = generate_string(6);

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
                <h2><span class="icon"><i class="fas fa-calendar-check"></i></span>
                    <span class="list">Agendar citas</span>
                </h2>
                <br>
                <?php
                include './../config/conexion.php';
                $consulta = "SELECT * FROM mascotas";
                $ejecutar = mysqli_query($conn, $consulta) or die(mysqli_error($conn));

                // Verifica si hay resultados en la consulta
                if (mysqli_num_rows($ejecutar) > 0): ?>
                    <form name="autentificacion_frm" action="validar_cita.php" method="POST"
                        enctype="application/x-www-form-urlencoded" class="formx">
                        <div class="form-container">
                            <!-- 1 Column -->
                            <div class="column">
                                <div id="input-line-container">
                                    <label class="name-input" for="cliente">Cliente:</label>
                                    <select class="input-line" name="cliente_txt" id="cliente" tabindex="1" required>
                                        <option value="" disabled selected>Seleccione el cliente</option>
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
                                <div id="input-line-container">
                                    <label class="name-input" for="fecha_cita">Fecha de cita:</label>
                                    <input type="date" id="fecha_cita" name="fecha_cita_txt" class="input-line" required
                                        tabindex="3" />
                                </div>
                                <div id="input-line-container">
                                    <label class="name-input" for="servicio">Servicio:</label>
                                    <select class="input-line" name="servicio_txt" id="servicio" tabindex="5" required>
                                        <option value="" disabled selected>Seleccione el servicio que realizará </option>
                                        <?php
                                        include './../config/conexion.php';
                                        $consulta = "SELECT * FROM servicios";
                                        $ejecutar = mysqli_query($conn, $consulta) or die(mysqli_error($conn));
                                        ?>
                                        <?php foreach ($ejecutar as $opciones): ?>
                                            <option value="<?php echo $opciones['id_servicio'] ?>">
                                                <?php echo $opciones['Nombre_servicio']; ?>
                                            </option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                            </div>
                            <!-- 2 Column -->
                            <div class="column">
                                <div id="input-line-container">
                                    <label class="name-input" for="paciente">Paciente: </label>
                                    <select class="input-line" name="paciente_txt" id="paciente" tabindex="2" required>
                                        <!-- Este select será actualizado dinámicamente por JavaScript -->
                                        <option disabled selected>Seleccione primero al cliente</option>
                                    </select>
                                </div>
                                <div id="input-line-container">
                                    <label class="name-input" for="hora_cita">Hora de cita:</label>
                                    <input type="time" id="hora_cita" name="hora_cita_txt" class="input-line" required
                                        tabindex="4" />
                                </div>
                                <div id="input-line-container">
                                    <label class="name-input" for="nota">Nota adicional:</label>
                                    <input type="text" name="nota_txt" class="input-line"
                                        placeholder="Nota adicional o motivo" maxlength="300"
                                        oninput="validarCaracteresEspeciales4(this)" required tabindex="6" />
                                </div>
                            </div>
                        </div>
                        <input type="hidden" id="Folio" name="folio_txt" value="<?php echo $Folio ?>">
                        <div class="center">
                            <button type="submit" id="btnEnviar" class="button-login1" tabindex="10">Registrar</button>
                        </div>
                    </form>
                <?php else: ?>
                    <div class="formx4">
                        <center>
                            <h3>REGISTRE AL CLIENTE Y ASOCIELO CON LA MASCOTA PARA CONTINUAR...</h3>
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

        document.getElementById('fecha_cita').setAttribute('min', new Date().toISOString().split('T')[0]);

        document.addEventListener("DOMContentLoaded", function () {
            document.getElementById("cliente").focus();
        });
    </script>

</body>
<script src="../js/jquery-2.2.4.min.js" type="text/javascript"></script>
<script src="../js/event6.js"></script>
<script src="../js/event5.js"></script>
<script src="../js/validadores2.js"></script>

</html>