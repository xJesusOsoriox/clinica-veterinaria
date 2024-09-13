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

function validarNumerosLetrasYAcentos(input) {
  // Solo permite números, letras (a-z, A-Z, á-ú, Á-Ú, ñ, Ñ), y espacios
  input.value = input.value.replace(/[^0-9a-zA-ZáéíóúÁÉÍÓÚñÑ]/g, '');
}



document.addEventListener("keydown", function (event) {
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


var aliasInput = document.querySelector("input[name='alias_txt']");
aliasInput.addEventListener('input', function () {
  var inputValue = aliasInput.value;
  aliasInput.value = inputValue;  // No se hace transformación como en el caso del código

  if (inputValue.length >= 3) {
    aliasInput.setCustomValidity('');
  } else {
    aliasInput.setCustomValidity('El alias debe tener al menos 3 letras.');
  }
});

var colorPeloInput = document.querySelector("input[name='color_pelo_txt']");
colorPeloInput.addEventListener('input', function () {
  var inputValue = colorPeloInput.value;
  colorPeloInput.value = inputValue;  // No se hace transformación como en el caso del código

  if (inputValue.length >= 3) {
    colorPeloInput.setCustomValidity('');
  } else {
    colorPeloInput.setCustomValidity('El color de pelo debe tener al menos 3 letras.');
  }
});


  var pesoActualInput = document.querySelector("input[name='peso_actual_txt']");
  
  pesoActualInput.addEventListener('input', function() {
      var inputValue = parseFloat(pesoActualInput.value);
      
      if (isNaN(inputValue) || inputValue <= 0) {
          pesoActualInput.setCustomValidity('El valor debe ser mayor a 0.');
      } else {
          pesoActualInput.setCustomValidity('');
      }
      
      // Trigger the HTML5 validation UI
      pesoActualInput.reportValidity();
  });
