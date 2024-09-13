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

                    $consulta1 = "SELECT citas.*, servicios.Nombre_servicio 
                    FROM citas 
                    JOIN servicios ON citas.Servicio = servicios.id_servicio 
                    WHERE citas.Paciente = '$id_mascota' AND servicios.Tipo_servicio = '1'";
                    $resultado1 = mysqli_query($conn, $consulta1);
                    if ($resultado1 && $row1 = $resultado1->fetch_array()) {
                        $hay_historial = true;
                    }
                }
            }
            ?>
            <div class="container">
                <?php if ($hay_historial) { ?>
                    <h2><span class="icon"><i class="fas fa-calendar-check"></i></span>
                        <span class="list">Calendario de vacunación:
                            <?php echo '<span style="color: #9574e7;">' . $Mascota . '</span>'; ?></span>
                    </h2>
                    <br>
                    <div class="formx4">
                        <?php
                        // Obtener el año actual
                        $anio = 2024;

                        // Meses del año
                        $meses = [
                            '01' => 'Enero',
                            '02' => 'Febrero',
                            '03' => 'Marzo',
                            '04' => 'Abril',
                            '05' => 'Mayo',
                            '06' => 'Junio',
                            '07' => 'Julio',
                            '08' => 'Agosto',
                            '09' => 'Septiembre',
                            '10' => 'Octubre',
                            '11' => 'Noviembre',
                            '12' => 'Diciembre'
                        ];

                        // Inicializar contador de meses
                        $contador = 0;

                        // Mostrar calendarios en grupos de tres meses
                        foreach ($meses as $mes => $nombre_mes) {
                            // Obtener el primer y último día del mes
                            $primer_dia = $anio . '-' . $mes . '-01';
                            $ultimo_dia = date('Y-m-t', strtotime($primer_dia));

                            // Obtener las citas del mes actual
                            $sql = "SELECT citas.*, servicios.Nombre_servicio 
                            FROM citas 
                            JOIN servicios ON citas.Servicio = servicios.id_servicio 
                            WHERE citas.Paciente = '$id_mascota' AND servicios.Tipo_servicio = '1' 
                            AND citas.Fecha BETWEEN '$primer_dia' AND '$ultimo_dia' 
                            ORDER BY citas.Fecha";
                            $result = $conn->query($sql);

                            // Almacenar las citas en un array por día
                            $citas = [];
                            while ($row = $result->fetch_assoc()) {
                                $fecha = $row['Fecha'];
                                $dia = date('j', strtotime($fecha));
                                if (!isset($citas[$dia])) {
                                    $citas[$dia] = [];
                                }
                                $citas[$dia][] = $row;
                            }

                            // Mostrar el nombre del mes y el calendario
                            if ($contador % 3 == 0) {
                                if ($contador > 0) {
                                    echo '</div><br>'; // Cierre de la fila anterior
                                }
                                echo '<div style="display: flex; justify-content: space-between;">';
                            }

                            echo '<div style="flex: 1; margin: 0 10px;">';
                            echo '<h2>' . $nombre_mes . ' ' . $anio . '</h2>';
                            echo '<table border="1" style="width: 100%; border-collapse: collapse;">';
                            echo '<tr>';

                            // Días de la semana
                            $semana_dias = ['Lun', 'Mar', 'Mié', 'Jue', 'Vie', 'Sáb', 'Dom'];
                            foreach ($semana_dias as $dia_semana) {
                                echo '<th>' . $dia_semana . '</th>';
                            }
                            echo '</tr><tr>';

                            // Espacios vacíos para el primer día del mes
                            $primer_dia_semana = date('N', strtotime($primer_dia)); // 1 (para lunes) hasta 7 (para domingo)
                            for ($i = 1; $i < $primer_dia_semana; $i++) {
                                echo '<td></td>';
                            }

                            // Días del mes
                            $dias_del_mes = date('t', strtotime($primer_dia));
                            for ($dia = 1; $dia <= $dias_del_mes; $dia++) {
                                $fecha_actual = $anio . '-' . $mes . '-' . str_pad($dia, 2, '0', STR_PAD_LEFT);
                                $has_citas = isset($citas[$dia]);

                                // Estilo para la celda con citas
                                $cell_style = $has_citas ? 'background-color: #9574e7; cursor: pointer;' : '';
                                $onclick = $has_citas ? 'onclick="showModal(\'' . htmlspecialchars(json_encode($citas[$dia]), ENT_QUOTES, 'UTF-8') . '\');"' : '';

                                echo '<td style="vertical-align: top; padding: 5px; ' . $cell_style . '" ' . $onclick . '>';
                                echo $dia;
                                echo '</td>';

                                // Nueva fila si es domingo
                                if (($dia + $primer_dia_semana - 1) % 7 == 0) {
                                    echo '</tr><tr>';
                                }
                            }

                            echo '</tr>';
                            echo '</table>';
                            echo '</div>';

                            $contador++;
                        }

                        // Cierre de la última fila
                        if ($contador % 3 != 0) {
                            echo '</div><br>';
                        }
                        ?>

                        <!-- Modal HTML -->
                        <div id="modal"
                            style="display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 40%; max-width: 600px; background: white; border: 1px solid #ccc; box-shadow: 0 4px 8px rgba(0,0,0,0.2); padding: 20px; z-index: 1000;">
                            <h2>Detalles de la cita</h2>
                            <div id="modal-content"></div>
                            <button class="button-login1" onclick="closeModal()">Cerrar</button>
                        </div>

                        <!-- Overlay -->
                        <div id="overlay"
                            style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5); z-index: 999;">
                        </div>

                        <script>
                            function showModal(citasJson) {
                                var citas = JSON.parse(citasJson);
                                var modalContent = document.getElementById('modal-content');
                                modalContent.innerHTML = '';

                                citas.forEach(function (cita) {
                                    modalContent.innerHTML += '<p><strong>Folio:</strong> ' + cita.Folio + '<br>' +
                                        '<strong>Hora:</strong> ' + cita.Hora + '<br>' +
                                        '<strong>Servicio:</strong> ' + cita.Nombre_servicio + '<br>' +
                                        '<strong>Nota:</strong> ' + cita.Nota_motivo + '</p>' +
                                        '<hr style="border: 1px solid #757575; margin-top:10px; margin-bottom:10px;">';
                                });

                                document.getElementById('modal').style.display = 'block';
                                document.getElementById('overlay').style.display = 'block';
                            }

                            function closeModal() {
                                document.getElementById('modal').style.display = 'none';
                                document.getElementById('overlay').style.display = 'none';
                            }
                        </script>
                    </div>

                <?php } else { ?>
                    <h2><span class="icon"><i class="fas fa-scroll"></i></span>
                        <span class="list">Calendario de vacunación</span>
                    </h2>
                    <br>
                    <div class="formx4">
                        <center>
                            <h3>ESTE PACIENTE AÚN NO CUENTA CON NINGUNA VACUNA</h3>
                        </center>
                    </div>
                <?php } ?>
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