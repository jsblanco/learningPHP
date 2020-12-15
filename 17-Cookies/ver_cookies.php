<?php

//como $_GET o $_POST, $_COOKIE es un array asociativo superglobal. Nos permite leer las cookies.

if (isset($_COOKIE["miCookie"])){
    echo '<h1>'.$_COOKIE["miCookie"].'</h1>';
} else {
    echo '<h1>La cookie "miCookie" no existe.</h1>';
};

if (isset($_COOKIE["carneEnlatada"])){
    echo '<h1>'.$_COOKIE["carneEnlatada"].'</h1>';
} else {
    echo '<h1>La cookie "carneEnlatada" no existe.</h1>';
};

?>

<a href="crear_cookies.php">Crear cookies</a><br>
<a href="borrar_cookies.php">Borrar miCookie</a>