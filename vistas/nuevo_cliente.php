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
                    <span class="list">Registro de clientes</span>
                </h2>
                <br>
                <form name="autentificacion_frm" action="validar_cliente.php" method="POST"
                    enctype="application/x-www-form-urlencoded" class="formx">
                    <div class="form-container">
                        <!-- 1 Column -->
                        <div class="column">
                            <div id="input-line-container">
                                <label class="name-input" for="cuenta_bancaria">Cuenta bancaria:</label>
                                <input type="text" id="cuenta_bancaria" name="cuenta_bancaria_txt" class="input-line"
                                    placeholder="Cuenta bancaria" maxlength="18" oninput="validarNumeros(this)"
                                    tabindex="1" required />
                            </div>
                            <div id="input-line-container">
                                <label class="name-input" for="correo">Correo Electrónico:</label>
                                <input type="email" id="correo" name="correo_txt" class="input-line"
                                    placeholder="Correo Electrónico" maxlength="28"
                                    oninput="validarCaracteresEspeciales(this)" required tabindex="4" />
                                <div class="validar" id="respuesta1"> </div>
                            </div>
                            <div id="input-line-container">
                                <label class="name-input" for="apellido_paterno">Apellido paterno:</label>
                                <input type="text" name="apellido_paterno_txt" class="input-line"
                                    placeholder="Apellido paterno" maxlength="10" oninput="validarLetrasYAcentos(this)"
                                    tabindex="7" required />
                            </div>
                            
                        </div>
                        <!-- 2 Column -->
                        <div class="column">
                            <div id="input-line-container">
                                <label class="name-input" for="domicilio">Domicilio:</label>
                                <input type="text" name="domicilio_txt" class="input-line" placeholder="Domicilio"
                                    maxlength="50" oninput="validarCaracteresEspeciales4(this)" required tabindex="2" />
                            </div>
                            <div id="input-line-container">
                                <label class="name-input" for="codigo_postal">Código Postal:</label>
                                <input type="text" name="codigo_postal_txt" class="input-line"
                                    placeholder="Código Postal" maxlength="5" oninput="validarNumeros(this)" required
                                    tabindex="5" />
                            </div>
                            <div id="input-line-container">
                                <label class="name-input" for="apellido_materno">Apellido materno:</label>
                                <input type="text" name="apellido_materno_txt" class="input-line"
                                    placeholder="Apellido materno" maxlength="10" oninput="validarLetrasYAcentos(this)"
                                    tabindex="8" required />
                            </div>
                        </div>
                        <!-- 3 Column -->
                        <div class="column">
                            <div id="input-line-container">
                                <label class="name-input" for="telefono">Teléfono:</label>
                                <input type="text" name="telefono_txt" class="input-line" placeholder="Teléfono"
                                    maxlength="10" oninput="validarNumeros(this)" required tabindex="3" />
                            </div>
                            <div id="input-line-container">
                                <label class="name-input" for="rfc">RFC:</label>
                                <input type="text" id="rfc" name="rfc_txt" class="input-line" placeholder="RFC"
                                    maxlength="13" oninput="validarNumerosYLetras(this)" tabindex="6" required />
                                <div class="validar" id="respuesta"> </div>
                            </div>
                            <div id="input-line-container">
                                <label class="name-input" for="nombre">Nombre:</label>
                                <input type="text" name="nombre_txt" class="input-line" placeholder="Nombre"
                                    maxlength="15" oninput="validarLetrasEspaciosYAcentos(this)" required
                                    tabindex="9" />
                            </div>
                        </div>
                    </div>
                    <div class="center">
                        <button type="submit" id="btnEnviar" class="button-login1" tabindex="11">Registrar</button>
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
<script src="../js/event5.js"></script>
<script src="../js/validadores3.js"></script>


</html>