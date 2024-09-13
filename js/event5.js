//Validando si existe el RFC en BD antes de enviar el Form
$("#rfc").on("keyup", function() {
    var rfc = $("#rfc").val(); //CAPTURANDO EL VALOR DE INPUT CON ID RFC
    var longitudRfc = $("#rfc").val().length; //CUENTO LONGITUD
  
    //Valido la longitud 
    if(longitudRfc >= 0){
        var dataString = 'rfc=' + rfc;
  
        $.ajax({
            url: '../vistas/verificarRFC.php',
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
                    $("#btnEnviar").prop('disabled', false).css('background-color', '#9574e7'); // Habilito
                    $("input").prop('disabled', false).css('background-color', 'transparent'); //Desabilito los inputs
                    $("select").prop('disabled', false).css('background-color', 'transparent'); // Habilito
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
            url: '../vistas/verificarCorreo.php',
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
                    $("#btnEnviar").prop('disabled', false).css('background-color', '#9574e7');
                    $("input").prop('disabled', false).css('background-color', 'transparent');
                    $("select").prop('disabled', false).css('background-color', 'transparent'); // Habilito
                }
            }
        });
    } else {
        // Si el campo de correo está vacío, limpiar el mensaje de respuesta
      $("#respuesta1").html('');
      $("#btnEnviar").prop('disabled', false).css('background-color', '#9574e7');
      $("input").prop('disabled', false).css('background-color', 'transparent');
      $("select").prop('disabled', false).css('background-color', 'transparent'); // Habilito
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
            url: '../../model/verificarCURP.php', // Asegúrate de que esta ruta sea correcta
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
                  $("select").prop('disabled', false).css('background-color', 'transparent'); // Habilito
                }
            }
        });
    }
  });