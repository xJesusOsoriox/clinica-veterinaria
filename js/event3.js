function abrirVentanaFlotante(Nsolicitud) {
    document.getElementById("Nsolicitud").value = Nsolicitud;
    var ventanaFlotante = document.getElementById("ventanaFlotante");
    ventanaFlotante.style.display = "block";
  }

  function cerrarVentanaFlotante() {
    var ventanaFlotante = document.getElementById("ventanaFlotante");
    ventanaFlotante.style.display = "none";
}
  

  function guardarTexto() {
    var Nsolicitud = document.getElementById("Nsolicitud").value;
    var textoIngresado = document.getElementById("textoEntrada").value;
    var aprobado = "Proceso";

    if (textoIngresado.trim() === "") {
      Swal.fire({
        icon: 'error',
        title: 'Error',
        text: 'Por favor, ingrese el motivo.'
      });
      return; // Detener la ejecución si el campo está vacío
    }

    // Crear un objeto FormData para enviar el texto y el "Numero de Solicitud" al servidor
    var formData = new FormData();
    formData.append("Nsolicitud", Nsolicitud);
    formData.append("texto", textoIngresado);
    formData.append("texto1", aprobado);

    fetch("./../../controller/Guardar_texto.php", {
      method: "POST",
      body: formData
    })
      .then(response => response.text())
      .then(responseText => {
        // Utilizar SweetAlert para mostrar la respuesta del servidor
        Swal.fire({
          position: "center",
          icon: "success",
          title: "Exito",
          text: "La solicitud se ha aprobado",
          showConfirmButton: false,
          timer: 1500
        }).then(() => {
          // Recargar la página después de cerrar la alerta
          location.reload();
        });
      })
      .catch(error => {
        console.error("Error:", error);
      });
}


function abrirVentanaFlotanteR(Nsolicitud) {
    document.getElementById("Nsolicitud").value = Nsolicitud;
    var ventanaFlotante = document.getElementById("ventanaFlotanteR");
    ventanaFlotante.style.display = "block";
  }

  function cerrarVentanaFlotanteR() {
    var ventanaFlotante = document.getElementById("ventanaFlotanteR");
    ventanaFlotante.style.display = "none";
  }

  function guardarTextoR() {
    var Nsolicitud = document.getElementById("Nsolicitud").value;
    var textoIngresado = document.getElementById("textoEntradaR").value;
    var rechazado = "Rechazado";

    if (textoIngresado.trim() === "") {
      Swal.fire({
        icon: 'error',
        title: 'Error',
        text: 'Por favor, ingrese el motivo.'
      });
      return; // Detener la ejecución si el campo está vacío
    }

    // Crear un objeto FormData para enviar el texto y el "Numero de solicitud" al servidor
    var formData = new FormData();
    formData.append("Nsolicitud", Nsolicitud);
    formData.append("texto", textoIngresado);
    formData.append("texto1", rechazado);

    fetch("./../../controller/Guardar_texto.php", {
      method: "POST",
      body: formData
    })
      .then(response => response.text())
      .then(responseText => {
        // Utilizar SweetAlert para mostrar la respuesta del servidor
        Swal.fire({
          position: "center",
          icon: "success",
          title: "Exito",
          text: "La solicitud se ha rechazado",
          showConfirmButton: false,
          timer: 1500
        }).then(() => {
          // Recargar la página después de cerrar la alerta
          location.reload();
        });
      })
      .catch(error => {
        console.error("Error:", error);
      });
}
  
function abrirVentanaFlotanteX(Nsolicitud) {
    document.getElementById("Nsolicitud").value = Nsolicitud;
    var ventanaFlotante = document.getElementById("ventanaFlotanteX");
    ventanaFlotante.style.display = "block";
  }

  function cerrarVentanaFlotanteX() {
    var ventanaFlotante = document.getElementById("ventanaFlotanteX");
    ventanaFlotante.style.display = "none";
  }
  
  function guardarTextoX() {
    var Nsolicitud = document.getElementById("Nsolicitud").value;
    var textoIngresado = document.getElementById("textoEntradaX").value;
    var rechazado = "Terminado";

    if (textoIngresado.trim() === "") {
      Swal.fire({
        icon: 'error',
        title: 'Error',
        text: 'Por favor, ingrese el motivo.'
      });
      return; // Detener la ejecución si el campo está vacío
    }

    // Crear un objeto FormData para enviar el texto y el "Numero de solicitud" al servidor
    var formData = new FormData();
    formData.append("Nsolicitud", Nsolicitud);
    formData.append("texto", textoIngresado);
    formData.append("texto1", rechazado);

    fetch("./../../controller/Guardar_texto.php", {
      method: "POST",
      body: formData
    })
      .then(response => response.text())
      .then(responseText => {
        // Utilizar SweetAlert para mostrar la respuesta del servidor
        Swal.fire({
          position: "center",
          icon: "success",
          title: "Exito",
          text: "La solicitud ha sido terminada!!",
          showConfirmButton: false,
          timer: 1500
        }).then(() => {
          // Recargar la página después de cerrar la alerta
          location.reload();
        });
      })
      .catch(error => {
        console.error("Error:", error);
      });
  }

  function filtrarTramites() {
    var input, filtro, tabla, filas, celda, i, txtValor;
    input = document.getElementById("busqueda");
    filtro = input.value.toUpperCase();
    tabla = document.getElementsByClassName("tabla")[0];
    filas = tabla.getElementsByTagName("tr");

    for (i = 1; i < filas.length; i++) { // Empezamos desde 1 para omitir la fila de encabezado
        celda = filas[i].getElementsByTagName("td")[2]; // Columna del número de serie
        
        if (celda) {
            txtValor = celda.textContent || celda.innerText;
            if (txtValor.toUpperCase().indexOf(filtro) > -1) {
                filas[i].style.display = "";

            } else {
                filas[i].style.display = "none";
            }
        }
    }   
}

function filtrarMisTramites() {
    var input, filtro, tabla, filas, celda, i, txtValor;
    input = document.getElementById("busqueda");
    filtro = input.value.toUpperCase();
    tabla = document.getElementsByClassName("tabla")[0];
    filas = tabla.getElementsByTagName("tr");

    for (i = 1; i < filas.length; i++) { // Empezamos desde 1 para omitir la fila de encabezado
        celda = filas[i].getElementsByTagName("td")[1]; // Columna del número de serie
        
        if (celda) {
            txtValor = celda.textContent || celda.innerText;
            if (txtValor.toUpperCase().indexOf(filtro) > -1) {
                filas[i].style.display = "";

            } else {
                filas[i].style.display = "none";
            }
        }
    }   
}

function validarNumeros(input) {
    // Eliminar cualquier carácter no numérico y dejar solo números
    input.value = input.value.replace(/\D/g, '');
}