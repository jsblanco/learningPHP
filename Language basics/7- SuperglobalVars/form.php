<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Formulario en PHP</title>
    </head>
    <body>
        <h1>Formulario en PHP</h1>

        <!-- GET funciona igual, pero pasando la info por params  -->

        <form method="POST" action="receive.php">
            <p>
                <label for="nombre">Nombre: </label>
                <input name="nombre" type="text">
            </p>
            <p>
                <label for="apellidos">Apellidos: </label>
                <input name="apellidos" type="text">
            </p>

            <button type="submit">Enviar datos</button>
        </form>
    </body>
</html>