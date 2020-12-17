<?php
include '../13-Includes/components/head.php';
?>

    <h1>Validar formularios en PHP</h1>

    <form method="post" action="process_form.php">
        <label for="name">Nombre:</label><br>
        <input type="text" name="name" required pattern="[A-Za-z]+"/><br>
        <label for="surname">Apellidos:</label><br>
        <input type="text" name="surname" required pattern="[A-Za-z ]+"/><br>
        <label for="age">Edad:</label><br>
        <input type="number" name="age"  required pattern="[0-9]+"/><br>
        <label for="email">Email:</label><br>
        <input type="email" name="email" required/><br>
        <label for="password">Contraseña:</label><br>
        <input type="password" name="password" required/><br>
        <input type="submit" value="enviar">
    </form>

<?php
include '../13-Includes/components/footer.php';
