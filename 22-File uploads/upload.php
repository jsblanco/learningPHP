<?php


$uploadedFile = $_FILES['file'];
$name = $uploadedFile['name'];
$type = $uploadedFile['type'];

if ($type == 'image/jpg'
    || $type == 'image/jpeg'
    || $type == 'image/png'
    || $type == 'image/gif') {

    if (!is_dir('images')) {
        mkdir('images', 0777);
    }
    //$uploadedFile es un array de datos del archivo subido; el archivo en sí está en la key tmp_name
    move_uploaded_file($uploadedFile['tmp_name'], 'images/'.$name);
    echo '<h4 style="color: darkgreen">Imagen '.$name.' subida adecuadamente</h4>';
    echo '<a href="index.php">Volver al formulario de subida</a>';

} else {
    //Tras 4 segundos te llevará a index.php
    header("Refresh: 4; URL=index.php");
    echo '<h4 style="color: tomato">Por favor, sube una imagen</h4>';
}