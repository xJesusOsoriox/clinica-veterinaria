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
$consulta1 = "SELECT * FROM mascotas WHERE id_mascota='$id_mascota' ";
$resultado1 = mysqli_query($conn, $consulta1);
if ($resultado1) {
    while ($row = $resultado1->fetch_array()) {
        $Mascota = $row['Alias'];
        $Codigo = $row['Codigo'];
        $Id_Especie = $row['Especie'];
        $Id_Raza = $row['Raza'];
        $ColorPelo = $row['Color_pelo'];
        $FechaNac = $row['Fecha_nac'];
        $Peso_medio = $row['Peso_medio'];
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
?>

<?php
$sql = "
    SELECT Peso_act AS Peso_actual FROM consultas WHERE Id_mascota = $id_mascota
    UNION ALL
    SELECT Peso_actual FROM mascotas WHERE Id_mascota = $id_mascota;
";

$resultado = mysqli_query($conn, $sql);

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
            <div class="container">
                <h2><span class="icon"><i class="fas fa-dog"></i></span>
                    <span class="list">Perfil:
                        <?php echo '<span style="color: #9574e7;">' . $Mascota . '</span>'; ?></span>
                </h2>
                <br>
                <div class="formx4">
                    <div class="form-container">
                        <!-- 1 Column -->
                        <div class="column">
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
                                <?php
                                $sql = "
SELECT Peso_act AS Peso_actual FROM consultas WHERE Id_mascota = $id_mascota AND Peso_act > 0
UNION ALL
SELECT Peso_actual FROM mascotas WHERE Id_mascota = $id_mascota AND Peso_actual > 0;
";

                                $resultado = mysqli_query($conn, $sql);
                                $suma_pesos = 0;
                                $total_registros = 0;
                                while ($fila = mysqli_fetch_assoc($resultado)) {
                                    $suma_pesos += $fila['Peso_actual'];
                                    $total_registros++;
                                }
                                if ($total_registros > 1) {
                                    $promedio_peso = $suma_pesos / $total_registros;
                                    $Peso_mediox = number_format($promedio_peso, 2); // Formateo a 2 decimales
                                    ?>
                                    <div id="input-line-container">
                                        <label class="name-input" for="peso_medio">Peso medio (kg):</label>
                                        <input type="text" id="peso_medio" name="peso_medio_txt" class="input-line"
                                            value="<?php echo $Peso_mediox ?>" readonly />
                                    </div>
                                    <?php
                                } else {
                                    ?>
                                    <div id="input-line-container">
                                        <label class="name-input" for="peso_medio">Peso medio (kg):</label>
                                        <input type="text" id="peso_medio" name="peso_medio_txt" class="input-line"
                                            value="<?php echo $Peso_medio ?>" readonly />
                                    </div>
                                    <?php
                                }

                                ?>
                            </div>
                        </div>
                        <!-- 2 Column -->
                        <div class="column">
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
                                <label class="name-input" for="peso_actual">Peso actual (kg):</label>
                                <input type="text" id="peso_actual" name="peso_actual_txt" class="input-line"
                                    value="<?php echo $Peso_actual ?>" readonly />
                            </div>
                        </div>
                        <!-- 3 Column -->
                        <div class="column">
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
                        </div>
                    </div>
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
    </script>

</body>
<script src="../js/jquery-2.2.4.min.js" type="text/javascript"></script>
<script src="../js/event2.js"></script>
<script src="../js/event5.js"></script>
<script src="../js/validadores2.js"></script>

</html>