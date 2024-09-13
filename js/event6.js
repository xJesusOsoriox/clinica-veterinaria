function cargarPacientes() {
    var clienteSeleccionado = document.getElementById("cliente").value;

    // Realizar una solicitud AJAX
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("paciente").innerHTML = this.responseText;
        }
    };
    xmlhttp.open("GET", "../vistas/obtener_pacientes.php?cliente=" + clienteSeleccionado, true);
    xmlhttp.send();
}

// Agregar un evento change al select de especie
document.getElementById("cliente").addEventListener("change", cargarPacientes);
