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
$Folio = $_GET['Folio'];
$consulta5 = "SELECT * FROM citas WHERE Folio='$Folio' ";
$resultado5 = mysqli_query($conn, $consulta5);
if ($resultado5) {
    while ($row = $resultado5->fetch_array()) {
        $Fecha = $row['Fecha'];
        $Hora = $row['Hora'];
        $Id_Servicio = $row['Servicio'];
        $Nota_motivo = $row['Nota_motivo'];
        $Id_Cliente = $row['Cliente'];
        $Id_Paciente = $row['Paciente'];
        $Asistencia = $row['Asistencia'];
    }
}

$consulta6 = "SELECT * FROM servicios WHERE id_servicio='$Id_Servicio' ";
$resultado6 = mysqli_query($conn, $consulta6);
if ($resultado6) {
    while ($row = $resultado6->fetch_array()) {
        $Servicio = $row['Nombre_servicio'];
    }
}

?>

<?php
$consulta6 = "SELECT * FROM consultas WHERE Folio='$Folio' ";
$resultado6 = mysqli_query($conn, $consulta6);
if ($resultado6) {
    while ($row = $resultado6->fetch_array()) {
        $PesoAnt = $row['Peso_ant'];
        $PesoAct = $row['Peso_act'];

    }
}

?>

<?php
$consulta1 = "SELECT * FROM mascotas WHERE id_mascota='$Id_Paciente' ";
$resultado1 = mysqli_query($conn, $consulta1);
if ($resultado1) {
    while ($row = $resultado1->fetch_array()) {
        $Mascota = $row['Alias'];
        $Codigo = $row['Codigo'];
        $Id_Especie = $row['Especie'];
        $Id_Raza = $row['Raza'];
        $ColorPelo = $row['Color_pelo'];
        $FechaNac = $row['Fecha_nac'];
        $Peso_actual = $row['Peso_actual'];
        $Dueño = $row['Dueño'];

    }
}
$consulta2 = "SELECT * FROM clientes WHERE Id_cliente='$Dueño' ";
$resultado2 = mysqli_query($conn, $consulta2);
if ($resultado2) {
    while ($row = $resultado2->fetch_array()) {
        $NombreDueño = $row['Apellido_paterno'] . ' ' . $row['Apellido_materno'] . ' ' . $row['Nombre'];
    }
}

$consulta3 = "SELECT * FROM especies WHERE id_especie='$Id_Especie' ";
$resultado3 = mysqli_query($conn, $consulta3);
if ($resultado3) {
    while ($row = $resultado3->fetch_array()) {
        $Especie = $row['Nombre_especie'];
    }
}

$consulta4 = "SELECT * FROM razas WHERE id_raza='$Id_Raza' ";
$resultado4 = mysqli_query($conn, $consulta4);
if ($resultado4) {
    while ($row = $resultado4->fetch_array()) {
        $Raza = $row['Nombre_raza'];
    }
}

$consulta5 = "SELECT * FROM asistencia WHERE id_asistencia='$Asistencia' ";
$resultado5 = mysqli_query($conn, $consulta5);
if ($resultado5) {
    while ($row = $resultado5->fetch_array()) {
        $Asistio = $row['S_N'];
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
                                        <span class="list" style="font-size: 15px;">Consultar cita</span>
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
                    <span class="list">Asistencia de citas - Folio:
                        <?php echo '<span style="color: #9574e7;">' . $Folio . '</span>'; ?></span>
                </h2>
                <br>
                <?php
                if ($Asistencia == "3") { ?>
                    <form name="autentificacion_frm" action="validar_asistencia.php" method="POST"
                        enctype="application/x-www-form-urlencoded" class="formx">
                        <div class="form-container">

                            <!-- 1 Column -->
                            <div class="column">
                                <div id="input-line-container">
                                    <label class="name-input" for="folio">Folio: </label>
                                    <input type="text" id="folio" name="folio_txt" class="input-line"
                                        value="<?php echo $Folio ?>" readonly />
                                </div>
                                <div id="input-line-container">
                                    <label class="name-input" for="servicio">Servicio: </label>
                                    <input type="text" id="servicio" name="servicio_txt" class="input-line"
                                        value="<?php echo $Servicio ?>" readonly />
                                </div>
                                <div id="input-line-container">
                                    <label class="name-input" for="alias">Alias</label>
                                    <input type="text" id="alias" name="alias_txt" class="input-line"
                                        value="<?php echo $Mascota ?>" readonly />
                                </div>
                                <div id="input-line-container">
                                    <label class="name-input" for="color_pelo">Color de pelo:</label>
                                    <input type="text" id="color_pelo" name="color_pelo_txt" class="input-line"
                                        value="<?php echo $ColorPelo ?>" readonly />
                                </div>
                                <div id="input-line-container">
                                    <label class="name-input" for="asistencia">El paciente asistió a la cita:</label>
                                    <select class="input-line" name="asistencia_txt" id="asistencia"
                                        onchange="togglePesoActual()" tabindex="2" required>
                                        <option value="" disabled selected>Seleccione sí o no </option>
                                        <?php
                                        include './../config/conexion.php';
                                        $consulta = "SELECT * FROM asistencia";
                                        $ejecutar = mysqli_query($conn, $consulta) or die(mysqli_error($conn));
                                        ?>
                                        <?php foreach ($ejecutar as $opciones): ?>
                                            <option value="<?php echo $opciones['id_asistencia'] ?>">
                                                <?php echo $opciones['S_N'] ?>
                                            </option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                            </div>
                            <!-- 2 Column -->
                            <div class="column">
                                <div id="input-line-container">
                                    <label class="name-input" for="fechaCita">Fecha:</label>
                                    <input type="text" id="fechaCita" name="fechaCita_txt" class="input-line"
                                        value="<?php echo $Fecha ?>" readonly />
                                </div>
                                <div id="input-line-container">
                                    <label class="name-input" for="Nota">Nota o motivo de la cita:</label>
                                    <input type="text" id="Nota" name="Nota_txt" class="input-line"
                                        value="<?php echo $Nota_motivo ?>" readonly />
                                </div>
                                <div id="input-line-container">
                                    <label class="name-input" for="especie">Especie:</label>
                                    <input type="text" id="especie" name="especie_txt" class="input-line"
                                        value="<?php echo $Especie ?>" readonly />
                                </div>
                                <div id="input-line-container">
                                    <label class="name-input" for="fecha_nacimiento">Fecha de Nacimiento:</label>
                                    <input type="text" id="fecha_nacimiento" name="fecha_nacimiento_txt" class="input-line"
                                        value="<?php echo $FechaNac ?>" readonly />
                                </div>
                                <div id="input-line-container">
                                    <div id="peso_actual_div" style="display:none;">
                                        <label class="name-input" for="peso_actual">Peso actual (kg):</label>
                                        <input type="text" id="peso_actual" name="peso_actual_txt" class="input-line"
                                            placeholder="Peso actual" tabindex="3" maxlength="5" oninput="validarNumerosYPuntos(this)"
                                            required />
                                    </div>
                                </div>
                            </div>
                            <!-- 3 Column -->
                            <div class="column">
                                <div id="input-line-container">
                                    <label class="name-input" for="horaCita">Hora:</label>
                                    <input type="text" id="horaCita" name="horaCita_txt" class="input-line"
                                        value="<?php echo $Hora ?>" readonly />
                                </div>
                                <div id="input-line-container">
                                    <label class="name-input" for="raza">Raza:</label>
                                    <input type="text" id="raza" name="raza_txt" class="input-line"
                                        value="<?php echo $Raza ?>" readonly />
                                </div>
                                <div id="input-line-container">
                                    <label class="name-input" for="dueño">Dueño:</label>
                                    <input type="text" id="dueño" name="dueño_txt" class="input-line"
                                        value="<?php echo $NombreDueño ?>" readonly />
                                </div>
                                <div id="input-line-container">
                                    <label class="name-input" for="peso_anterior">Peso anterior (kg):</label>
                                    <input type="text" id="peso_anterior" name="peso_anterior_txt" class="input-line"
                                        value="<?php echo $Peso_actual ?>" readonly />
                                </div>
                            </div>
                        </div>
                        <input type="hidden" id="id_mascota" name="id_mascota_txt" value="<?php echo $Id_Paciente ?>">
                        <div class="center">
                            <button type="submit" id="btnEnviar" class="button-login1" tabindex="4">Registrar</button>
                        </div>
                    </form>
                    <script>
                        document.addEventListener("DOMContentLoaded", function () {
                            document.getElementById("asistencia").focus();
                        });

                    </script>
                <?php } else { ?>
                    <form name="autentificacion_frm" action="validar_asistencia.php" method="POST"
                        enctype="application/x-www-form-urlencoded" class="formx41">
                        <div class="form-container">

                            <!-- 1 Column -->
                            <div class="column">
                                <div id="input-line-container">
                                    <label class="name-input" for="folio">Folio: </label>
                                    <input type="text" id="folio" name="folio_txt" class="input-line"
                                        value="<?php echo $Folio ?>" readonly />
                                </div>
                                <div id="input-line-container">
                                    <label class="name-input" for="servicio">Servicio: </label>
                                    <input type="text" id="servicio" name="servicio_txt" class="input-line"
                                        value="<?php echo $Servicio ?>" readonly />
                                </div>
                                <div id="input-line-container">
                                    <label class="name-input" for="alias">Alias</label>
                                    <input type="text" id="alias" name="alias_txt" class="input-line"
                                        value="<?php echo $Mascota ?>" readonly />
                                </div>
                                <div id="input-line-container">
                                    <label class="name-input" for="color_pelo">Color de pelo:</label>
                                    <input type="text" id="color_pelo" name="color_pelo_txt" class="input-line"
                                        value="<?php echo $ColorPelo ?>" readonly />
                                </div>
                                <div id="input-line-container">
                                    <label class="name-input" for="asistencia">El paciente asistió a la cita:</label>
                                    <input type="text" id="asistencia" name="asistencia_txt" class="input-line"
                                        value="<?php echo $Asistio ?>" readonly />
                                </div>
                            </div>
                            <!-- 2 Column -->
                            <div class="column">
                                <div id="input-line-container">
                                    <label class="name-input" for="fechaCita">Fecha:</label>
                                    <input type="text" id="fechaCita" name="fechaCita_txt" class="input-line"
                                        value="<?php echo $Fecha ?>" readonly />
                                </div>
                                <div id="input-line-container">
                                    <label class="name-input" for="Nota">Nota o motivo de la cita:</label>
                                    <input type="text" id="Nota" name="Nota_txt" class="input-line"
                                        value="<?php echo $Nota_motivo ?>" readonly />
                                </div>
                                <div id="input-line-container">
                                    <label class="name-input" for="especie">Especie:</label>
                                    <input type="text" id="especie" name="especie_txt" class="input-line"
                                        value="<?php echo $Especie ?>" readonly />
                                </div>
                                <div id="input-line-container">
                                    <label class="name-input" for="fecha_nacimiento">Fecha de Nacimiento:</label>
                                    <input type="text" id="fecha_nacimiento" name="fecha_nacimiento_txt" class="input-line"
                                        value="<?php echo $FechaNac ?>" readonly />
                                </div>
                                <div id="input-line-container">
                                    <?php if ($Asistencia == "1") { ?>
                                        <label class="name-input" for="peso_actual">Peso actual (kg):</label>
                                        <input type="text" id="peso_actual" name="peso_actual_txt" class="input-line"
                                            value="<?php echo $PesoAct ?>" readonly />
                                    <?php } ?>
                                </div>
                            </div>
                            <!-- 3 Column -->
                            <div class="column">
                                <div id="input-line-container">
                                    <label class="name-input" for="horaCita">Hora:</label>
                                    <input type="text" id="horaCita" name="horaCita_txt" class="input-line"
                                        value="<?php echo $Hora ?>" readonly />
                                </div>
                                <div id="input-line-container">
                                    <label class="name-input" for="raza">Raza:</label>
                                    <input type="text" id="raza" name="raza_txt" class="input-line"
                                        value="<?php echo $Raza ?>" readonly />
                                </div>
                                <div id="input-line-container">
                                    <label class="name-input" for="dueño">Dueño:</label>
                                    <input type="text" id="dueño" name="dueño_txt" class="input-line"
                                        value="<?php echo $NombreDueño ?>" readonly />
                                </div>
                                <div id="input-line-container">
                                    <?php if ($Asistencia == "1") { ?>
                                        <label class="name-input" for="peso_anterior">Peso anterior (kg):</label>
                                        <input type="text" id="peso_anterior" name="peso_anterior_txt" class="input-line"
                                            value="<?php echo $PesoAnt ?>" readonly />
                                    <?php } else { ?>
                                        <label class="name-input" for="peso_anterior">Último peso (kg):</label>
                                        <input type="text" id="peso_anterior" name="peso_anterior_txt" class="input-line"
                                            value="<?php echo $PesoAnt ?>" readonly />
                                    <?php } ?>

                                </div>
                            </div>
                        </div>
                    </form>
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

        document.getElementById('fecha_nacimiento').setAttribute('max', new Date().toISOString().split('T')[0]);

        function togglePesoActual() {
            var asistencia = document.getElementById("asistencia").value;
            var pesoActualDiv = document.getElementById("peso_actual_div");
            var pesoActualInput = document.getElementById("peso_actual");

            if (asistencia === "1") {
                pesoActualDiv.style.display = "block"; // Mostrar el div si el valor es 1
                pesoActualInput.setAttribute("required", "required"); // Hacer el campo obligatorio
            } else {
                pesoActualDiv.style.display = "none"; // Ocultar el div si el valor no es 1
                pesoActualInput.removeAttribute("required"); // Hacer el campo opcional
            }
        }

        // Asegúrate de llamar a la función cuando se cargue la página para establecer el estado inicial
        document.addEventListener("DOMContentLoaded", function () {
            togglePesoActual(); // Establecer el estado inicial del campo al cargar la página
        });

    </script>

</body>
<script src="../js/jquery-2.2.4.min.js" type="text/javascript"></script>
<script src="../js/event2.js"></script>
<script src="../js/event5.js"></script>
<script src="../js/validadores2.js"></script>

</html>