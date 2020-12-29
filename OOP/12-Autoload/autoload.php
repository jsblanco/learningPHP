<?php

function autoloader($class)
{
    require_once 'classes/' . strtolower($class) . '.php';
}

spl_autoload_register('autoloader');