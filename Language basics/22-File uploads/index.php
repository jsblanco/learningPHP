<!DOCTYPE HTML>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <title>Subir imágenes con PHP</title>
</head>
<body>
<h1>Subida de imágenes con PHP</h1>
<form action="upload.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="file"/>
    <input type="submit" value="Subir archivo">
</form>
<h1>Imágenes subidas hasta ahora:</h1>

<?php
if ($manager = opendir('./images')):
    while ($image = readdir($manager)):
        if ($image !== '.' && $image !== '..'):
            echo '<img src="images/' . $image . '" width=400>';
        endif;
    endwhile;
endif;
?>
</body>
</html>