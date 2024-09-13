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
$Id_cliente = $_GET['Id_cliente'];
$consulta1 = "SELECT * FROM clientes WHERE Id_cliente='$Id_cliente' ";
$resultado1 = mysqli_query($conn, $consulta1);
if ($resultado1) {
    while ($row = $resultado1->fetch_array()) {
        $Codigo = $row['Codigo'];
        $Cuenta = $row['Cuenta_bancaria'];
        $Domicilio = $row['Domicilio'];
        $Telefono = $row['Telefono'];
        $Correo = $row['Correo'];
        $CP = $row['CP'];
        $RFC = $row['RFC'];
        $Nombre = $row['Apellido_paterno'] . ' ' . $row['Apellido_materno'] . ' ' . $row['Nombre'];
    }
}

$consulta3 = "SELECT * FROM contactos WHERE Id_cliente='$Id_cliente' ";
$resultado3 = mysqli_query($conn, $consulta3);
if ($resultado3) {
    while ($row = $resultado3->fetch_array()) {
        $Id_contacto = $row['id_contacto'];
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
                            <a href="#" class="active">
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
                <h2><span class="icon"><i class="fas fa-user-alt"></i></span>
                    <span class="list">Perfil:
                        <?php echo '<span style="color: #9574e7;">' . $Nombre . '</span>'; ?></span>
                </h2>
                <br>
                <div class="formx41">
                    <div class="form-container">
                        <!-- 1 Column -->
                        <div class="column">
                            <div id="input-line-container">
                                <label class="name-input" for="alias">Codigo</label>
                                <input type="text" id="alias" name="alias_txt" class="input-line"
                                    value="<?php echo $Codigo ?>" readonly />
                            </div>
                            <div id="input-line-container">
                                <label class="name-input" for="color_pelo"> Teléfono:</label>
                                <input type="text" id="color_pelo" name="color_pelo_txt" class="input-line"
                                    value="<?php echo $Telefono ?>" readonly />
                            </div>
                            <div id="input-line-container">
                                <label class="name-input" for="color_pelo"> RFC:</label>
                                <input type="text" id="color_pelo" name="color_pelo_txt" class="input-line"
                                    value="<?php echo $RFC ?>" readonly />
                            </div>
                        </div>
                        <!-- 2 Column -->
                        <div class="column">
                            <div id="input-line-container">
                                <label class="name-input" for="especie">Cuenta bancaria:</label>
                                <input type="text" id="especie" name="especie_txt" class="input-line"
                                    value="<?php echo $Cuenta ?>" readonly />
                            </div>
                            <div id="input-line-container">
                                <label class="name-input" for="fecha_nacimiento">Correo:</label>
                                <input type="text" id="fecha_nacimiento" name="fecha_nacimiento_txt" class="input-line"
                                    value="<?php echo $Correo ?>" readonly />
                            </div>
                            <div id="input-line-container">
                                <label class="name-input" for="peso_actual">Nombre:</label>
                                <input type="text" id="peso_actual" name="peso_actual_txt" class="input-line"
                                    value="<?php echo $Nombre ?>" readonly />
                            </div>
                        </div>
                        <!-- 3 Column -->
                        <div class="column">
                            <div id="input-line-container">
                                <label class="name-input" for="raza">Domicilio:</label>
                                <input type="text" id="raza" name="raza_txt" class="input-line"
                                    value="<?php echo $Domicilio ?>" readonly />
                            </div>
                            <div id="input-line-container">
                                <label class="name-input" for="dueño">CP:</label>
                                <input type="text" id="dueño" name="dueño_txt" class="input-line"
                                    value="<?php echo $CP ?>" readonly />
                            </div>
                            <div id="input-line-container">
                                <label class="name-input" for="contacto">Personas de contacto:</label>
                                <select class="input-line" name="contacto_txt" id="contacto" tabindex="10" required>
                                    <?php
                                    include './../config/conexion.php';

                                    // Comprobar si $Id_cliente no está vacío
                                    if (empty($Id_cliente)) {
                                        echo '<option value="">ID de cliente no proporcionado</option>';
                                        exit;
                                    }

                                    $consulta = "
                                    SELECT clientes.Id_cliente, clientes.Apellido_paterno, clientes.Apellido_materno, clientes.Nombre
                                    FROM contactos
                                    JOIN clientes ON contactos.id_contacto = clientes.Id_cliente
                                    WHERE contactos.Id_cliente = '$Id_cliente'";

                                    $resultado = mysqli_query($conn, $consulta);

                                    if ($resultado) {
                                        if (mysqli_num_rows($resultado) > 0) {
                                            while ($row = $resultado->fetch_assoc()) {
                                                echo '<option value="' . $row['Id_cliente'] . '">'
                                                    . $row['Apellido_paterno'] . ' '
                                                    . $row['Apellido_materno'] . ' '
                                                    . $row['Nombre']
                                                    . '</option>';
                                            }
                                        } else {
                                            echo '<option value="">No se encontraron contactos</option>';
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <form name="autentificacion_frm" action="validar_contacto.php" method="POST"
                    enctype="application/x-www-form-urlencoded" class="formx41">
                    <div class="form-container">
                        <!-- 1 Column -->
                        <div class="column">
                            <div id="input-line-container">
                                <label class="name-input" for="contacto">Persona de contacto:</label>
                                <?php
                                include './../config/conexion.php';
                                $consulta = "
                                SELECT * 
                                FROM clientes 
                                WHERE Id_cliente != $Id_cliente 
                                AND Id_cliente NOT IN (
                                SELECT id_contacto 
                                FROM contactos 
                                WHERE id_cliente = $Id_cliente)";

                                // Ejecutar la consulta
                                $ejecutar = mysqli_query($conn, $consulta) or die(mysqli_error($conn));
                                ?>

                                <select class="input-line" name="contacto_txt" id="contacto" tabindex="10" required>
                                    <option value="" disabled selected>Seleccione el contacto</option>
                                    <?php foreach ($ejecutar as $opciones): ?>
                                        <option value="<?php echo $opciones['Id_cliente'] ?>">
                                            <?php echo $opciones['Apellido_paterno'] . ' ' . $opciones['Apellido_materno'] . ' ' . $opciones['Nombre']; ?>
                                        </option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>
                        <!-- 2 Column -->
                        <div class="column">
                            <input type="hidden" id="id_cliente" name="id_cliente_txt"
                                value="<?php echo $Id_cliente ?>">
                            <div class="center">
                                <button type="submit" id="btnEnviar" class="button-login1"
                                    tabindex="11">Registrar</button>
                            </div>
                        </div>
                    </div>
                </form>
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