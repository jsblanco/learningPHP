<?php


// Primero el archivo, luego los privilegios rwx (read write execute)
//Permisos a+ permiten leer y escribir
$file = fopen("dummy_file.txt", "a+");

//fgets lee una línea cada vez. Para leer contenido de todas las líneas necesitamos un bucle:
while (!feof($file)) {
    $fileContent = fgets($file);
    echo $fileContent . '</br>';
}

fwrite($file,  "\n"."Yada yada");

$close_file = fclose($file);


unlink("cloned_file.txt") or die("Error al borrar");
copy("dummy_file.txt", "copied_file.txt") or die("Error al copiar");
rename ("copied_file.txt", "cloned_file.txt");


if (file_exists("cloned_file.txt")){
    echo '<h1>Este archivo existe</h1>';
} else  {
    echo '<h1 style="color:tomato">¡Este archivo no existe!</h1>';
}
