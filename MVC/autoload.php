<?php

function autoloader($className)
{
    $classUrl = str_replace("\\", DIRECTORY_SEPARATOR, $className);
    if (file_exists('controllers/' . $classUrl . '.php')) {
        include 'controllers/' . $classUrl . '.php';
    }
}

spl_autoload_register('autoloader');



