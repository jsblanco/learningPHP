<?php


if (isset($_COOKIE['miCookie'])) {
// Ésto no sirve:
    unset($_COOKIE['miCookie']);
// Para eliminar una cookie tenemos que caducarla:
    setcookie('miCookie', '', time() - 100);

    echo '<h1>Cookie borrada</h1>';
} else {
    echo '<h1>No hay cookies que eliminar</h1>';
}

header('Location: ver_cookies.php');