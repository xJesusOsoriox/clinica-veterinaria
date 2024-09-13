// Función para cargar las razas basadas en la especie seleccionada
function cargarRazas() {
    var especieSeleccionada = document.getElementById("especie").value;

    // Realizar una solicitud AJAX
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            // Actualizar el select de razas con los datos obtenidos
            document.getElementById("raza").innerHTML = this.responseText;
        }
    };
    xmlhttp.open("GET", "../vistas/obtener_razas.php?especie=" + especieSeleccionada, true);
    xmlhttp.send();
}

// Agregar un evento change al select de especie
document.getElementById("especie").addEventListener("change", cargarRazas);
