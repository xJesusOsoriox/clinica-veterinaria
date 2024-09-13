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

document.addEventListener("DOMContentLoaded", function() {
  document.getElementById("curp").focus();
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

var curpInput = document.querySelector("input[name='curp_txt']");
curpInput.addEventListener('input', function () {
  var curpValue = curpInput.value;
  curpInput.value = curpValue.toUpperCase();

  if (curpValue.length === 18) {
    curpInput.setCustomValidity('');
  } else {
    curpInput.setCustomValidity('La CURP debe tener 18 caracteres.');
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

var apellidoPaternoInput = document.querySelector("input[name='apellido_paterno_txt']");
apellidoPaternoInput.addEventListener('input', function () {
  var inputValue = apellidoPaternoInput.value;
  if (inputValue.length >= 3) {
    apellidoPaternoInput.setCustomValidity('');
  } else {
    apellidoPaternoInput.setCustomValidity('El apellido paterno debe tener al menos 3 caracteres.');
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

var lugarNacInput = document.querySelector("input[name='lugar_nacimiento_txt']");
lugarNacInput.addEventListener('input', function () {
  var inputValue = lugarNacInput.value;
  if (inputValue.length >= 5) {
    lugarNacInput.setCustomValidity('');
  } else {
    lugarNacInput.setCustomValidity('El nombre debe tener al menos 5 caracteres.');
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

var calleInput = document.querySelector("input[name='calle_txt']");
calleInput.addEventListener('input', function () {
  var inputValue = calleInput.value;
  if (inputValue.length >= 3) {
    calleInput.setCustomValidity('');
  } else {
    calleInput.setCustomValidity('La calle debe tener al menos 3 caracteres.');
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


