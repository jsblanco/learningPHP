<?php

function autoloader($className)
{
    $class_rep = str_replace("\\", DIRECTORY_SEPARATOR, $className);

    include 'controllers/'.$class_rep . '.php';

}

spl_autoload_register('autoloader');
