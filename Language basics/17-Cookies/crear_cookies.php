<?php

echo '<h1>Cookies creadas</h1>';

//setcookie("nombre", "valor que siempre es un string", caducidad, ruta, dominio);

setcookie('miCookie', 'hola! soy tu cookie, y no caduco jamás.');
setcookie('carneEnlatada', 'Carne enladada para comer cochino, caduca en un año',time()+(60*60*24*365));

?>

<a href="ver_cookies.php">Ver las cookies!</a><br>
<a href="borrar_cookies.php">Borrar miCookie</a>