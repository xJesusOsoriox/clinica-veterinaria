<?php
// obtener el nombre del archivo desde el parámetro 'archivo' de la URL
$archivo = $_GET['archivo'];

// verificar si el archivo existe
if (file_exists($archivo)) {

    // obtener el tipo MIME del archivo
    $tipo = mime_content_type($archivo);

    // definir los tipos MIME permitidos para la visualización
    $tipos_permitidos = array(
        'text/plain',
        'text/html',
        'text/css',
        'application/pdf',
        'application/msword',
        'application/vnd.ms-excel',
        'application/vnd.ms-powerpoint',
        'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
        'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
        'application/vnd.openxmlformats-officedocument.presentationml.presentation',
        'image/jpeg',
        'image/png',
        'image/gif',
        'video/mp4',
        'audio/mpeg'
    );

    // verificar si el tipo MIME del archivo está permitido
    if (in_array($tipo, $tipos_permitidos)) {

        // configurar las cabeceras HTTP para la visualización del archivo
        header('Content-Type: '.$tipo);
        header('Content-Disposition: inline; filename="'.basename($archivo).'"');
        header('Content-Length: '.filesize($archivo));

        // mostrar el contenido del archivo
        readfile($archivo);

    } else {
        // si el tipo MIME del archivo no está permitido, mostrar un mensaje de error
        echo 'El tipo de archivo no está permitido para la visualización.';
    }

} else {
    // si el archivo no existe, mostrar un mensaje de error
    echo 'El archivo no existe.';
}
?>