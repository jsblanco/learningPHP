<?php

function app_autoloader($class) {

    $class_rep = str_replace("\\", DIRECTORY_SEPARATOR, $class);

    require 'classes/' . $class_rep . '.php';

}

spl_autoload_register('app_autoloader');
