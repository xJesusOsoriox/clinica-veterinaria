
    // Obtener la fecha actual
    var fecha = new Date();

    // Formatear la fecha
    var options = {
      weekday: "long",
      year: "numeric",
      month: "long",
      day: "numeric",
    };
    var fechaFormateada = fecha.toLocaleDateString("es-ES", options);

    // Convertir solo la primera letra del día a mayúscula
    fechaFormateada = fechaFormateada.replace(/^\w/, function (match) {
      return match.toUpperCase();
    });

    // Insertar la fecha en el elemento con el ID "fecha_actual"
    document.getElementById("fecha_actual").innerHTML = " " + fechaFormateada;