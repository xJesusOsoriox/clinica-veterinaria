<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">

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
    <style>
        /* Oculta todos los formularios por defecto */
        .formulario-servicio {
            display: none;
        }
    </style>

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
                            <a href="#" class="active">
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
                <h2><span class="icon"><i class="fa fa-book"></i></span>
                    <span class="list">Servicios disponibles</span>
                </h2>
                <div class="formx3">
                    <div id="input-line-container2">
                        <label class="name-input" for="servicios">Servicios disponibles:</label>
                        <select class="input-line" name="servicios_txt" id="servicios" tabindex="1" required
                            onchange="setTipoServicio()">
                            <option value="" disabled selected>Seleccione un servicio</option>
                            <?php
                            include './../config/conexion.php';
                            $consulta = "SELECT * FROM tipo_servicio";
                            $ejecutar = mysqli_query($conn, $consulta) or die(mysqli_error($conn));
                            ?>
                            <?php foreach ($ejecutar as $opciones): ?>
                                <option value="<?php echo $opciones['id_tipo_servicio'] ?>">
                                    <?php echo $opciones['Nombre']; ?>
                                </option>
                            <?php endforeach ?>
                        </select>
                    </div>
                </div>
                <div id="form-1" class="formulario-servicio">
                    <h2><span class="icon"><i class="fas fa-syringe"></i></span>
                        <span class="list">Vacunas</span>
                    </h2>
                    <br>
                    <form name="autentificacion_frm" action="validar_servicios.php" method="POST"
                        enctype="application/x-www-form-urlencoded" class="formx">
                        <div class="form-container">
                            <!-- 1 Column -->
                            <div class="column">
                                <div id="input-line-container">
                                    <label class="name-input" for="especie">Para que especie es:</label>
                                    <select class="input-line" name="especie_txt" id="especie" tabindex="1" required>
                                        <option value="" disabled selected>Seleccione una especie</option>
                                        <?php
                                        include './../config/conexion.php';
                                        $consulta = "SELECT * FROM especies";
                                        $ejecutar = mysqli_query($conn, $consulta) or die(mysqli_error($conn));
                                        ?>
                                        <?php foreach ($ejecutar as $opciones): ?>
                                            <option value="<?php echo $opciones['id_especie'] ?>">
                                                <?php echo $opciones['Nombre_especie']; ?>
                                            </option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                            </div>
                            <!-- 2 Column -->
                            <div class="column">
                                <div id="input-line-container">
                                    <label class="name-input" for="nombre_vacuna">Nombre de la vacuna:</label>
                                    <input type="text" id="nombre_vacuna" name="nombre_vacuna_txt" class="input-line"
                                        placeholder="Nombre de la vacuna" maxlength="50"
                                        oninput="validarLetrasEspaciosYAcentos(this)" tabindex="2" required />
                                </div>
                            </div>
                            <!-- 3 Column -->
                            <div class="column">
                                <div id="input-line-container">
                                    <label class="name-input" for="descripcion">Descripción:</label>
                                    <input type="text" name="descripcion_txt" class="input-line"
                                        placeholder="Descripción de la vacuna" maxlength="200"
                                        oninput="validarNumerosLetrasEspaciosYAcentos(this)" required tabindex="3" />
                                </div>
                            </div>
                        </div>
                        <input type="hidden" id="tipo_serv_txt_form1" name="tipo_serv_txt" value="">
                        <div class="center">
                            <button type="submit" id="btnEnviar" class="button-login1" tabindex="4">Registrar</button>
                        </div>
                    </form>
                </div>
                <div id="form-2" class="formulario-servicio">
                    <h2><span class="icon"><i class="fas fa-briefcase-medical"></i></span>
                        <span class="list">Consultas generales</span>
                    </h2>
                    <br>
                    <form name="autentificacion_frm" action="validar_servicios.php" method="POST"
                        enctype="application/x-www-form-urlencoded" class="formx">
                        <div class="form-container">
                            <!-- 1 Column -->
                            <div class="column">
                                <div id="input-line-container">
                                    <label class="name-input" for="nombre_consulta">Nombre de la consulta:</label>
                                    <input type="text" id="nombre_consulta" name="nombre_consulta_txt"
                                        class="input-line" placeholder="Nombre de la consulta" maxlength="50"
                                        oninput="validarLetrasEspaciosYAcentos(this)" tabindex="2" required />
                                </div>
                            </div>
                            <!-- 2 Column -->
                            <div class="column">
                                <div id="input-line-container">
                                    <label class="name-input" for="descripcion">Descripción:</label>
                                    <input type="text" name="descripcion_txt" class="input-line"
                                        placeholder="Descripción de la consulta" maxlength="200"
                                        oninput="validarNumerosLetrasEspaciosYAcentos(this)" required tabindex="3" />
                                </div>
                            </div>

                        </div>
                        <input type="hidden" id="tipo_serv_txt_form2" name="tipo_serv_txt" value="">
                        <div class="center">
                            <button type="submit" id="btnEnviar" class="button-login1" tabindex="4">Registrar</button>
                        </div>
                    </form>
                </div>
                <div id="form-3" class="formulario-servicio">
                    <h2><span class="icon"><i class="fas fa-capsules"></i></span>
                        <span class="list">Desparasitación</span>
                    </h2>
                    <br>
                    <form name="autentificacion_frm" action="validar_servicios.php" method="POST"
                        enctype="application/x-www-form-urlencoded" class="formx">
                        <div class="form-container">
                            <!-- 1 Column -->
                            <div class="column">
                                <div id="input-line-container">
                                    <label class="name-input" for="nombre_tratamiento">Nombre del tratamiento:</label>
                                    <input type="text" id="nombre_tratamiento" name="nombre_tratamiento_txt"
                                        class="input-line" placeholder="Nombre del tratamiento" maxlength="50"
                                        oninput="validarLetrasEspaciosYAcentos(this)" tabindex="2" required />
                                </div>
                            </div>
                            <!-- 2 Column -->
                            <div class="column">
                                <div id="input-line-container">
                                    <label class="name-input" for="descripcion">Descripción:</label>
                                    <input type="text" name="descripcion_txt" class="input-line"
                                        placeholder="Descripción del tratamiento" maxlength="200"
                                        oninput="validarNumerosLetrasEspaciosYAcentos(this)" required tabindex="3" />
                                </div>
                            </div>

                        </div>
                        <input type="hidden" id="tipo_serv_txt_form3" name="tipo_serv_txt" value="">
                        <div class="center">
                            <button type="submit" id="btnEnviar" class="button-login1" tabindex="4">Registrar</button>
                        </div>
                    </form>
                </div>
                <div id="form-4" class="formulario-servicio">
                    <h2><span class="icon"><i class="fa fa-heartbeat"></i></span>
                        <span class="list">Cirugías</span>
                    </h2>
                    <br>
                    <form name="autentificacion_frm" action="validar_servicios.php" method="POST"
                        enctype="application/x-www-form-urlencoded" class="formx">
                        <div class="form-container">
                            <!-- 1 Column -->
                            <div class="column">
                                <div id="input-line-container">
                                    <label class="name-input" for="nombre_cirugia">Nombre de la cirugía:</label>
                                    <input type="text" id="nombre_cirugia" name="nombre_cirugia_txt" class="input-line"
                                        placeholder="Nombre de la cirugía" maxlength="50"
                                        oninput="validarLetrasEspaciosYAcentos(this)" tabindex="2" required />
                                </div>
                            </div>
                            <!-- 2 Column -->
                            <div class="column">
                                <div id="input-line-container">
                                    <label class="name-input" for="descripcion">Descripción:</label>
                                    <input type="text" name="descripcion_txt" class="input-line"
                                        placeholder="Descripción de la cirugía" maxlength="200"
                                        oninput="validarNumerosLetrasEspaciosYAcentos(this)" required tabindex="3" />
                                </div>
                            </div>

                        </div>
                        <input type="hidden" id="tipo_serv_txt_form4" name="tipo_serv_txt" value="">
                        <div class="center">
                            <button type="submit" id="btnEnviar" class="button-login1" tabindex="4">Registrar</button>
                        </div>
                    </form>
                </div>
                <div id="form-5" class="formulario-servicio">
                    <h2><span class="icon"><i class="fas fa-tooth"></i></span>
                        <span class="list">Odontología veterinaria</span>
                    </h2>
                    <br>
                    <form name="autentificacion_frm" action="validar_servicios.php" method="POST"
                        enctype="application/x-www-form-urlencoded" class="formx">
                        <div class="form-container">
                            <!-- 1 Column -->
                            <div class="column">
                                <div id="input-line-container">
                                    <label class="name-input" for="procedimiento_odontologico">Procedimiento
                                        odontológico:</label>
                                    <input type="text" id="procedimiento_odontologico"
                                        name="procedimiento_odontologico_txt" class="input-line"
                                        placeholder="Procedimiento odontológico" maxlength="50"
                                        oninput="validarLetrasEspaciosYAcentos(this)" tabindex="2" required />
                                </div>
                            </div>
                            <!-- 2 Column -->
                            <div class="column">
                                <div id="input-line-container">
                                    <label class="name-input" for="descripcion">Descripción:</label>
                                    <input type="text" name="descripcion_txt" class="input-line"
                                        placeholder="Descripción del procedimiento" maxlength="200"
                                        oninput="validarNumerosLetrasEspaciosYAcentos(this)" required tabindex="3" />
                                </div>
                            </div>
                        </div>
                        <input type="hidden" id="tipo_serv_txt_form5" name="tipo_serv_txt" value="">
                        <div class="center">
                            <button type="submit" id="btnEnviar" class="button-login1" tabindex="4">Registrar</button>
                        </div>
                    </form>
                </div>
                <div id="form-6" class="formulario-servicio">
                    <h2><span class="icon"><i class="fas fa-x-ray"></i></span>
                        <span class="list">Diagnóstico por imágenes</span>
                    </h2>
                    <br>
                    <form name="autentificacion_frm" action="validar_servicios.php" method="POST"
                        enctype="application/x-www-form-urlencoded" class="formx">
                        <div class="form-container">
                            <!-- 1 Column -->
                            <div class="column">
                                <div id="input-line-container">
                                    <label class="name-input" for="nombre_diagnostico">Nombre del diagnóstico:</label>
                                    <input type="text" id="nombre_diagnostico" name="nombre_diagnostico_txt"
                                        class="input-line" placeholder="Nombre del diagnóstico" maxlength="50"
                                        oninput="validarLetrasEspaciosYAcentos(this)" tabindex="2" required />
                                </div>
                            </div>
                            <!-- 2 Column -->
                            <div class="column">
                                <div id="input-line-container">
                                    <label class="name-input" for="descripcion">Descripción:</label>
                                    <input type="text" name="descripcion_txt" class="input-line"
                                        placeholder="Descripción del diagnóstico" maxlength="200"
                                        oninput="validarNumerosLetrasEspaciosYAcentos(this)" required tabindex="3" />
                                </div>
                            </div>
                        </div>
                        <input type="hidden" id="tipo_serv_txt_form6" name="tipo_serv_txt" value="">
                        <div class="center">
                            <button type="submit" id="btnEnviar" class="button-login1" tabindex="4">Registrar</button>
                        </div>
                    </form>
                </div>
                <div id="form-7" class="formulario-servicio">
                    <h2><span class="icon"><i class="fas fa-microscope"></i></span>
                        <span class="list">Laboratorio</span>
                    </h2>
                    <br>
                    <form name="autentificacion_frm" action="validar_servicios.php" method="POST"
                        enctype="application/x-www-form-urlencoded" class="formx">
                        <div class="form-container">
                            <!-- 1 Column -->
                            <div class="column">
                                <div id="input-line-container">
                                    <label class="name-input" for="nombre_analisis">Nombre del análisis o
                                        prueba:</label>
                                    <input type="text" id="nombre_analisis" name="nombre_analisis_txt"
                                        class="input-line" placeholder="Nombre del análisis o prueba" maxlength="50"
                                        oninput="validarLetrasEspaciosYAcentos(this)" tabindex="2" required />
                                </div>
                            </div>
                            <!-- 2 Column -->
                            <div class="column">
                                <div id="input-line-container">
                                    <label class="name-input" for="descripcion">Descripción:</label>
                                    <input type="text" name="descripcion_txt" class="input-line"
                                        placeholder="Descripción del análisis o prueba" maxlength="200"
                                        oninput="validarNumerosLetrasEspaciosYAcentos(this)" required tabindex="3" />
                                </div>
                            </div>
                        </div>
                        <input type="hidden" id="tipo_serv_txt_form7" name="tipo_serv_txt" value="">
                        <div class="center">
                            <button type="submit" id="btnEnviar" class="button-login1" tabindex="4">Registrar</button>
                        </div>
                    </form>
                </div>
                <div id="form-8" class="formulario-servicio">
                    <h2><span class="icon"><i class="fas fa-notes-medical"></i></span>
                        <span class="list">Hospitalización</span>
                    </h2>
                    <br>
                    <form name="autentificacion_frm" action="validar_servicios.php" method="POST"
                        enctype="application/x-www-form-urlencoded" class="formx">
                        <div class="form-container">
                            <!-- 1 Column -->
                            <div class="column">
                                <div id="input-line-container">
                                    <label class="name-input" for="nombre_hospitalizacion">Nombre de la
                                        hospitalización:</label>
                                    <input type="text" id="nombre_hospitalizacion" name="nombre_hospitalizacion_txt"
                                        class="input-line" placeholder="Nombre de la hospitalización" maxlength="50"
                                        oninput="validarLetrasEspaciosYAcentos(this)" tabindex="2" required />
                                </div>
                            </div>
                            <!-- 2 Column -->
                            <div class="column">
                                <div id="input-line-container">
                                    <label class="name-input" for="descripcion">Descripción:</label>
                                    <input type="text" name="descripcion_txt" class="input-line"
                                        placeholder="Descripción de la hospitalización" maxlength="200"
                                        oninput="validarNumerosLetrasEspaciosYAcentos(this)" required tabindex="3" />
                                </div>
                            </div>
                        </div>
                        <input type="hidden" id="tipo_serv_txt_form8" name="tipo_serv_txt" value="">
                        <div class="center">
                            <button type="submit" id="btnEnviar" class="button-login1" tabindex="4">Registrar</button>
                        </div>
                    </form>
                </div>
                <div id="form-9" class="formulario-servicio">
                    <h2><span class="icon"><i class="fas fa-weight"></i></span>
                        <span class="list">Control de peso y nutrición</span>
                    </h2>
                    <br>
                    <form name="autentificacion_frm" action="validar_servicios.php" method="POST"
                        enctype="application/x-www-form-urlencoded" class="formx">
                        <div class="form-container">
                            <!-- 1 Column -->
                            <div class="column">
                                <div id="input-line-container">
                                    <label class="name-input" for="evaluacion_nutricional">Evaluación
                                        nutricional:</label>
                                    <input type="text" id="evaluacion_nutricional" name="evaluacion_nutricional_txt"
                                        class="input-line" placeholder="Evaluación nutricional" maxlength="50"
                                        oninput="validarLetrasEspaciosYAcentos(this)" tabindex="2" required />
                                </div>
                            </div>
                            <!-- 2 Column -->
                            <div class="column">
                                <div id="input-line-container">
                                    <label class="name-input" for="descripcion">Descripción:</label>
                                    <input type="text" name="descripcion_txt" class="input-line"
                                        placeholder="Descripción de la evaluacion nutricional" maxlength="200"
                                        oninput="validarNumerosLetrasEspaciosYAcentos(this)" required tabindex="3" />
                                </div>
                            </div>
                        </div>
                        <input type="hidden" id="tipo_serv_txt_form9" name="tipo_serv_txt" value="">
                        <div class="center">
                            <button type="submit" id="btnEnviar" class="button-login1" tabindex="4">Registrar</button>
                        </div>
                    </form>
                </div>
                <div id="form-10" class="formulario-servicio">
                    <h2><span class="icon"><i class="fas fa-ambulance"></i></span>
                        <span class="list">Emergencias</span>
                    </h2>
                    <br>
                    <form name="autentificacion_frm" action="validar_servicios.php" method="POST"
                        enctype="application/x-www-form-urlencoded" class="formx">
                        <div class="form-container">
                            <!-- 1 Column -->
                            <div class="column">
                                <div id="input-line-container">
                                    <label class="name-input" for="tipo_atencion">Tipo de atención:</label>
                                    <input type="text" id="tipo_atencion" name="tipo_atencion_txt" class="input-line"
                                        placeholder="Tipo de atención" maxlength="50"
                                        oninput="validarLetrasEspaciosYAcentos(this)" tabindex="2" required />
                                </div>
                            </div>
                            <!-- 2 Column -->
                            <div class="column">
                                <div id="input-line-container">
                                    <label class="name-input" for="descripcion">Descripción:</label>
                                    <input type="text" name="descripcion_txt" class="input-line"
                                        placeholder="Descripción de la atención" maxlength="200"
                                        oninput="validarNumerosLetrasEspaciosYAcentos(this)" required tabindex="3" />
                                </div>
                            </div>
                        </div>
                        <input type="hidden" id="tipo_serv_txt_form10" name="tipo_serv_txt" value="">
                        <div class="center">
                            <button type="submit" id="btnEnviar" class="button-login1" tabindex="4">Registrar</button>
                        </div>
                    </form>
                </div>
                <div id="form-11" class="formulario-servicio">
                    <h2><span class="icon"><i class="fas fa-bath"></i></span>
                        <span class="list">Peluquería y baño</span>
                    </h2>
                    <br>
                    <form name="autentificacion_frm" action="validar_servicios.php" method="POST"
                        enctype="application/x-www-form-urlencoded" class="formx">
                        <div class="form-container">
                            <!-- 1 Column -->
                            <div class="column">
                                <div id="input-line-container">
                                    <label class="name-input" for="tipo_servicio">Tipo de servicio:</label>
                                    <input type="text" id="tipo_servicio" name="tipo_servicio_txt" class="input-line"
                                        placeholder="Tipo de servicio" maxlength="50"
                                        oninput="validarLetrasEspaciosYAcentos(this)" tabindex="2" required />
                                </div>
                            </div>
                            <!-- 2 Column -->
                            <div class="column">
                                <div id="input-line-container">
                                    <label class="name-input" for="descripcion">Descripción:</label>
                                    <input type="text" name="descripcion_txt" class="input-line"
                                        placeholder="Descripción del servicio" maxlength="200"
                                        oninput="validarNumerosLetrasEspaciosYAcentos(this)" required tabindex="3" />
                                </div>
                            </div>
                        </div>
                        <input type="hidden" id="tipo_serv_txt_form11" name="tipo_serv_txt" value="">
                        <div class="center">
                            <button type="submit" id="btnEnviar" class="button-login1" tabindex="4">Registrar</button>
                        </div>
                    </form>
                </div>
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

        document.addEventListener("DOMContentLoaded", function () {
            document.getElementById("servicios").focus();
        });

        document.getElementById('servicios').addEventListener('change', function () {
            // Oculta todos los formularios
            var formularios = document.querySelectorAll('.formulario-servicio');
            formularios.forEach(function (formulario) {
                formulario.style.display = 'none';
            });

            // Muestra el formulario seleccionado
            var servicioSeleccionado = this.value;
            if (servicioSeleccionado) {
                document.getElementById('form-' + servicioSeleccionado).style.display = 'block';
            }
        });


        function setTipoServicio() {
            var selectElement = document.getElementById('servicios');
            var selectedValue = selectElement.options[selectElement.selectedIndex].value;

            document.getElementById('tipo_serv_txt_form1').value = selectedValue;
            document.getElementById('tipo_serv_txt_form2').value = selectedValue;
            document.getElementById('tipo_serv_txt_form3').value = selectedValue;
            document.getElementById('tipo_serv_txt_form4').value = selectedValue;
            document.getElementById('tipo_serv_txt_form5').value = selectedValue;
            document.getElementById('tipo_serv_txt_form6').value = selectedValue;
            document.getElementById('tipo_serv_txt_form7').value = selectedValue;
            document.getElementById('tipo_serv_txt_form8').value = selectedValue;
            document.getElementById('tipo_serv_txt_form9').value = selectedValue;
            document.getElementById('tipo_serv_txt_form10').value = selectedValue;
            document.getElementById('tipo_serv_txt_form11').value = selectedValue;


        }
    </script>

    </script>


</body>

<script src="../js/jquery-2.2.4.min.js" type="text/javascript"></script>
<script src="../js/event5.js"></script>
<script src="../js/validadores3.js"></script>


</html>