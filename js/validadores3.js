function validarNumeros(input) {
    // Eliminar cualquier carácter no numérico y dejar solo números
    input.value = input.value.replace(/\D/g, '');
}
  
function validarLetras(input) {
    // Eliminar cualquier carácter que no sea una letra (a-z, A-Z)
    input.value = input.value.replace(/[^a-zA-Z]/g, '');
}

function validarLetrasYEspacios(input) {
    // Eliminar cualquier carácter que no sea una letra (a-z, A-Z) o un espacio
    input.value = input.value.replace(/[^a-zA-Z\s]/g, '');
}

function validarNumerosLetrasYEspacios(input) {
  // Eliminar cualquier carácter que no sea un número, una letra (a-z, A-Z) o un espacio
  input.value = input.value.replace(/[^0-9a-zA-Z\s]/g, '');
}

function validarNumerosYLetras(input) {
    // Eliminar cualquier carácter que no sea un número o una letra (a-z, A-Z)
    input.value = input.value.replace(/[^0-9a-zA-Z]/g, '');
}

function validarCaracteresEspeciales(input) {
  // Eliminar cualquier carácter que no sea un número, una letra, "@" o "."
  input.value = input.value.replace(/[^0-9a-zA-Z@.]/g, '');
}

function validarCaracteresEspeciales2(input) {
  // Eliminar cualquier carácter que no sea un número, una letra o "-"
  input.value = input.value.replace(/[^0-9a-zA-Z-]/g, '');
}

function validarCaracteresEspeciales3(input) {
// Eliminar cualquier carácter que no sea un número, una letra, ".", "," o un espacio 
input.value = input.value.replace(/[^0-9a-zA-Z.,\s]/g, '');
}

function validarCaracteresEspeciales4(input) {
  // Eliminar cualquier carácter que no sea un número, una letra, ".", "," o un espacio 
  input.value = input.value.replace(/[^0-9a-zA-ZáéíóúÁÉÍÓÚñÑ.,\s]/g, '');
  }

function validarNumerosYPuntos(input) {
  // Eliminar cualquier carácter que no sea un número (0-9) o un punto (.)
  input.value = input.value.replace(/[^0-9.]/g, '');
}

function validarNumerosLetrasEspaciosYAcentos(input) {
  // Solo permite números, letras (a-z, A-Z, á-ú, Á-Ú, ñ, Ñ), y espacios
  input.value = input.value.replace(/[^0-9a-zA-ZáéíóúÁÉÍÓÚñÑ\s]/g, '');
}

function validarLetrasEspaciosYAcentos(input) {
  // Solo permite letras (a-z, A-Z, á-ú, Á-Ú, ñ, Ñ), y espacios
  input.value = input.value.replace(/[^a-zA-ZáéíóúÁÉÍÓÚñÑ\s]/g, '');
}

function validarLetrasYAcentos(input) {
  // Solo permite letras (a-z, A-Z, á-ú, Á-Ú, ñ, Ñ), y espacios
  input.value = input.value.replace(/[^a-zA-ZáéíóúÁÉÍÓÚñÑ]/g, '');
}



document.addEventListener("DOMContentLoaded", function() {
  document.getElementById("cuenta_bancaria").focus();
});

document.addEventListener("keydown", function(event) {
  // Si la tecla presionada es "Tab"
  if (event.key === "Tab") {
      // Obtener todos los elementos con atributo "tabindex"
      var tabindexElements = Array.from(document.querySelectorAll("[tabindex]"));

      // Obtener el último elemento con tabindex
      var lastTabindexElement = tabindexElements[tabindexElements.length - 1];

      // Si el elemento actualmente enfocado es el último elemento tabindex
      if (document.activeElement === lastTabindexElement) {
          // Evitar el comportamiento predeterminado de "Tab" (no hacer nada)
          event.preventDefault();
      }
  }
});

var telefonoInput = document.querySelector("input[name='telefono_txt']");
telefonoInput.addEventListener('input', function () {
  var inputValue = telefonoInput.value;
  if (inputValue.length === 10) {
    telefonoInput.setCustomValidity('');
  } else {
    telefonoInput.setCustomValidity('El número de telefono debe de ser de 10 dígitos.');
  }
});

var rfcInput = document.querySelector("input[name='rfc_txt']");
rfcInput.addEventListener('input', function () {
  var rfcValue = rfcInput.value;
  rfcInput.value = rfcValue.toUpperCase();

  if (rfcValue.length === 13) {
    rfcInput.setCustomValidity('');
  } else {
    rfcInput.setCustomValidity('El RFC debe tener 13 caracteres.');
  }
});

var nombreInput = document.querySelector("input[name='nombre_txt']");
nombreInput.addEventListener('input', function () {
  var inputValue = nombreInput.value;
  if (inputValue.length >= 3) {
    nombreInput.setCustomValidity('');
  } else {
    nombreInput.setCustomValidity('El nombre debe tener al menos 3 caracteres.');
  }
});

var cuentaBancariaInput = document.querySelector("input[name='cuenta_bancaria_txt']");
cuentaBancariaInput.addEventListener('input', function () {
  var cuentaBancariaValue = cuentaBancariaInput.value;
  cuentaBancariaInput.value = cuentaBancariaValue.toUpperCase();

  if (cuentaBancariaValue.length === 18) {
    cuentaBancariaInput.setCustomValidity('');
  } else {
    cuentaBancariaInput.setCustomValidity('La cuenta bancaria debe tener 18 dígitos.');
  }
});

var apellidoPaternoInput = document.querySelector("input[name='apellido_paterno_txt']");
apellidoPaternoInput.addEventListener('input', function () {
  var inputValue = apellidoPaternoInput.value;
  if (inputValue.length >= 3) {
    apellidoPaternoInput.setCustomValidity('');
  } else {
    apellidoPaternoInput.setCustomValidity('El apellido paterno debe tener al menos 3 caracteres.');
  }
});

var domicilioInput = document.querySelector("input[name='domicilio_txt']");
domicilioInput.addEventListener('input', function () {
  var inputValue = domicilioInput.value;
  if (inputValue.length >= 3) {
    domicilioInput.setCustomValidity('');
  } else {
    domicilioInput.setCustomValidity('El domicilio debe tener al menos 3 caracteres.');
  }
});

var cpInput = document.querySelector("input[name='codigo_postal_txt']");
cpInput.addEventListener('input', function () {
  var inputValue = cpInput.value;
  if (inputValue.length >= 5) {
    cpInput.setCustomValidity('');
  } else {
    cpInput.setCustomValidity('Introduce el CP de 5 dígitos.');
  }
});

var apellidoMaternoInput = document.querySelector("input[name='apellido_materno_txt']");
apellidoMaternoInput.addEventListener('input', function () {
  var inputValue = apellidoMaternoInput.value;
  if (inputValue.length >= 3) {
    apellidoMaternoInput.setCustomValidity('');
  } else {
    apellidoMaternoInput.setCustomValidity('El apellido materno debe tener al menos 3 caracteres.');
  }
});




