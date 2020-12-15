<?php

session_start();

//variable local:
$variableLocal ="Soy una variable local";

//variable de sesión:
$_SESSION['variablePersistente'] = "Soy una variable persistente";

var_dump($_SESSION);

?>