<h1>Welcome to my MVC website</h1>

<?php
require_once 'autoload.php';


if (isset($_GET['controller']) && class_exists($_GET['controller'])) {
    $controllerParam = $_GET['controller'];
    $controller = new $controllerParam();

    if (isset($_GET['action']) && method_exists($controller, $_GET['action'])) {
        $action = $_GET['action'];
        $controller->$action();
    } else {
        echo 'Requested page does not exist<br>';
    }
} else {
    echo 'Requested page does not exist.<br>';
}
