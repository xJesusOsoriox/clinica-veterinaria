//Validando si existe el RFC en BD antes de enviar el Form
$("#rfc").on("keyup", function() {
  var rfc = $("#rfc").val(); //CAPTURANDO EL VALOR DE INPUT CON ID RFC
  var longitudRfc = $("#rfc").val().length; //CUENTO LONGITUD

  //Valido la longitud 
  if(longitudRfc >= 0){
      var dataString = 'rfc=' + rfc;

      $.ajax({
          url: '../../app/model/verificarRFC.php',
          type: "GET",
          data: dataString,
          dataType: "JSON",

          success: function(datos){

              if(datos.success == 1){
                  $("#respuesta").html(datos.message);
                  $("input").prop('disabled', true).css('background-color', 'lightgrey'); //Desabilito los inputs
                  $("select").prop('disabled', true).css('background-color', 'lightgrey'); //Desabilito los inputs
                  $("input#rfc").prop('disabled', false).css('background-color', 'transparent');//Habilitando el input rfc
                  $("#btnEnviar").prop('disabled', true).css('background-color', 'lightgrey'); // Deshabilitar y cambiar color a gris
              } else {

                  $("#respuesta").html(datos.message);
                  $("#btnEnviar").prop('disabled', false).css('background-color', '#ff4b3a'); // Habilito
                  $("input").prop('disabled', false).css('background-color', 'transparent'); //Desabilito los inputs
                  $("select").prop('disabled', false).css('background-color', '#ff4b3a'); // Habilito
              }
          }
      });
  }
});


$("#correo").on("keyup", function() {
  var correo = $("#correo").val();
  var longitudCorreo = correo.length;

  // Verificar si la longitud del correo es mayor que 0 antes de hacer la verificación
  if (longitudCorreo > 0) {
      var dataString = 'correo=' + correo;

      $.ajax({
          url: '../../app/model/verificarCorreo.php',
          type: "GET",
          data: dataString,
          dataType: "JSON",

          success: function(datos) {
              if (datos.success == 1) {
                  $("#respuesta1").html(datos.message);
                  $("input").prop('disabled', true).css('background-color', 'lightgrey');
                  $("select").prop('disabled', true).css('background-color', 'lightgrey');
                  $("input#correo").prop('disabled', false).css('background-color', 'transparent');
                  $("#btnEnviar").prop('disabled', true).css('background-color', 'lightgrey');
              } else {
                  $("#respuesta1").html(datos.message);
                  $("#btnEnviar").prop('disabled', false).css('background-color', '#ff4b3a');
                  $("input").prop('disabled', false).css('background-color', 'transparent');
                  $("select").prop('disabled', false).css('background-color', '#ff4b3a');
              }
          }
      });
  } else {
      // Si el campo de correo está vacío, limpiar el mensaje de respuesta
    $("#respuesta1").html('');
    $("#btnEnviar").prop('disabled', false).css('background-color', '#ff4b3a');
    $("input").prop('disabled', false).css('background-color', 'transparent');
    $("select").prop('disabled', false).css('background-color', '#ff4b3a');
  }
});




// Validando si existe el CURP en BD antes de enviar el Form
$("#curp").on("keyup", function() {
  var curp = $("#curp").val(); // CAPTURANDO EL VALOR DE INPUT CON ID CURP
  var longitudCurp = $("#curp").val().length; // CUENTO LONGITUD

  // Valido la longitud
  if(longitudCurp >= 0){
      var dataString = 'curp=' + curp;

      $.ajax({
          url: '../../app/model/verificarCURP.php', // Asegúrate de que esta ruta sea correcta
          type: "GET",
          data: dataString,
          dataType: "JSON",

          success: function(datos){
              if(datos.success == 1){
                $("#respuesta2").html(datos.message);
                $("input").prop('disabled', true).css('background-color', 'lightgrey'); //Desabilito los inputs
                $("select").prop('disabled', true).css('background-color', 'lightgrey'); //Desabilito los inputs
                $("input#curp").prop('disabled', false).css('background-color', 'transparent');//Habilitando el input curp
                $("#btnEnviar").prop('disabled', true).css('background-color', 'lightgrey'); // Deshabilitar y cambiar color a gris
              } else {
                $("#respuesta2").html(datos.message);
                $("#btnEnviar").prop('disabled', false).css('background-color', '#ff4b3a'); // Habilito
                $("input").prop('disabled', false).css('background-color', 'transparent'); //Desabilito los inputs
                $("select").prop('disabled', false).css('background-color', '#ff4b3a'); // Habilito
              }
          }
      });
  }
});

document.addEventListener('DOMContentLoaded', function() {
    var fechaNacimientoInput = document.getElementById('fecha_nacimiento');
    var hoy = new Date();
    var fechaMax = new Date(hoy.getFullYear() - 18, hoy.getMonth(), hoy.getDate());

    var dia = fechaMax.getDate();
    var mes = fechaMax.getMonth() + 1; // Los meses en JavaScript son 0-indexed
    var año = fechaMax.getFullYear();

    // Asegúrate de que el día y el mes tengan dos dígitos
    if (dia < 10) {
        dia = '0' + dia;
    }
    if (mes < 10) {
        mes = '0' + mes;
    }

    var fechaMaxStr = año + '-' + mes + '-' + dia;
    fechaNacimientoInput.setAttribute('max', fechaMaxStr);
});

document.addEventListener('DOMContentLoaded', function() {
    var fechaConstitucionInput = document.getElementById('fecha_constitucion');
    var hoy = new Date(); // Obtener la fecha de hoy
    var dia = hoy.getDate();
    var mes = hoy.getMonth() + 1; // Los meses en JavaScript son 0-indexados
    var año = hoy.getFullYear();

    // Asegurarse de que el día y el mes tengan dos dígitos
    if (dia < 10) {
        dia = '0' + dia;
    }
    if (mes < 10) {
        mes = '0' + mes;
    }

    var fechaHoyStr = año + '-' + mes + '-' + dia;
    fechaConstitucionInput.setAttribute('max', fechaHoyStr);
});


function verificarCorreos() {
  var correo = document.getElementById('correo').value;
  var confirmarCorreo = document.getElementById('confirmar_correo').value;
  var respuesta = document.getElementById('respuesta4');
  var botonEnviar = document.getElementById('btnEnviar');

  if (correo !== confirmarCorreo) {
      respuesta.innerText = 'Los correos no coinciden';
      botonEnviar.disabled = true; // Desactiva el botón de enviar
      botonEnviar.style.backgroundColor = 'lightgrey'; // Cambia el color del botón a gris
  } else {
      respuesta.innerText = '';
      botonEnviar.disabled = false; // Activa el botón de enviar
      botonEnviar.style.backgroundColor = ''; // Restaura el color original del botón
  }
}

