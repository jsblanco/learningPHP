<?php

if (!is_dir("subfolder")) {
// 0777 son todos los permisos
    mkdir('subfolder', 0777) or die ('No se pudo crear la carpeta');
} else {
    rmdir('subfolder');
    echo "Carpeta eliminada<br>";
}

if ($manager = opendir('./folder')) {
    while (false !== ($file = readdir($manager))) {
        if ($file !== '.' && $file !== '..')
        echo $file.'<br>';
    }
}