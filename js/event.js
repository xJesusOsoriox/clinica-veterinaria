//Mostrar u ocultar las respuestas de "Preguntas frecuentes"
function mostrarRespuesta(idRespuesta) {
    // Ocultar todas las respuestas
    var respuestas = document.querySelectorAll('.respuesta');
    respuestas.forEach(function (respuesta) {
      respuesta.style.display = 'none';
    });

    // Mostrar la respuesta seleccionada
    var respuestaSeleccionada = document.getElementById(idRespuesta);
    respuestaSeleccionada.style.display = 'block';
}

//Para redirigir si es persona fisica o moral
function redireccionar() {
        var tipoSeleccionado = document.getElementById("tipo_registro").value;
        if (tipoSeleccionado === "1") {
            window.location.href = "./../../app/views/registro_Pfisica.php"; // Redirige a la página 1
        } else if (tipoSeleccionado === "2") {
            window.location.href = "./../../app/views/registro_PMoral.php"; // Redirige a la página 2
        }
    }


//Manda un mensaje cuando se quiere acceder a "Ingresar archivos" antes de llenar el formulario
function mostrarAlerta(event) {
  event.preventDefault(); // Evitar el comportamiento predeterminado del clic
  
  Swal.fire({
      icon: "error",
      title: "Lo siento",
      text: "¡Debes completar todos los campos y dar click en Siguiente!",
      showCancelButton: false, // Ocultar el botón de cancelar
      confirmButtonText: "Aceptar", // Cambiar el texto del botón de confirmación
      allowOutsideClick: false, // Evitar que la alerta se cierre al hacer clic fuera de ella
      allowEscapeKey: false // Evitar que la alerta se cierre al presionar la tecla de escape
  }).then((result) => {
      if (result.isConfirmed) {
          // Redirigir después de hacer clic en 'Aceptar'
          window.location.href = "#";
      }
  });
}

//Actualiza el icono cuando se sube un archivo
function updateIcon(inputId, iconId) {
    const input = document.getElementById(inputId);
    const icon = document.getElementById(iconId);
    if (input.files.length > 0) {
      icon.innerHTML = '<i class="fas fa-check-circle uploaded-icon"></i>';
    } else {
      icon.innerHTML = '<i class="fas fa-file-upload"></i>';
    }
  }
  
//No envia el formulario sin antes subir los archivos
  function validarFormulario() {
    // Obtener los elementos de archivo
    var ineFront = document.getElementById('file-upload-ine-front').files.length;
    var ineBack = document.getElementById('file-upload-ine-back').files.length;
    var comprobante = document.getElementById('file-upload-comprobante').files.length;
    var acta = document.getElementById('file-upload-acta').files.length;
    var curp = document.getElementById('file-upload-curp').files.length;

    // Verificar si algún archivo no ha sido seleccionado
    if (ineFront === 0 || ineBack === 0 || comprobante === 0 || acta === 0 || curp === 0) {
      // Mostrar alerta
      alert("Por favor, asegúrate de subir todos los archivos antes de enviar el formulario.");
      return false; // Evitar el envío del formulario
    }
    return true; // Envío del formulario permitido si todos los archivos han sido seleccionados
  }
  
  //No envia el formulario sin antes subir los archivos
  function validarFormulario2() {
    // Obtener los elementos de archivo
    var ineFront = document.getElementById('file-upload-ine-front').files.length;
    var ineBack = document.getElementById('file-upload-ine-back').files.length;
    var comprobante = document.getElementById('file-upload-comprobante').files.length;
    var acta = document.getElementById('file-upload-acta').files.length;
    var curp = document.getElementById('file-upload-curp').files.length;
    var inerepfront = document.getElementById('file-upload-identificacion-front').files.length;
    var inerepback = document.getElementById('file-upload-identificacion-back').files.length;
    var actaconst = document.getElementById('file-upload-acta-constitutiva').files.length;
    var constancia = document.getElementById('file-upload-constancia-fiscal').files.length;
    var podernot = document.getElementById('file-upload-poder-notarial').files.length;

    // Verificar si algún archivo no ha sido seleccionado
    if (ineFront === 0 || ineBack === 0 || comprobante === 0 || acta === 0 || curp === 0 || inerepfront === 0 || inerepback === 0 || actaconst === 0 || constancia === 0 || podernot === 0) {
      // Mostrar alerta
      alert("Por favor, asegúrate de subir todos los archivos antes de enviar el formulario.");
      return false; // Evitar el envío del formulario
    }
    return true; // Envío del formulario permitido si todos los archivos han sido seleccionados
  }
