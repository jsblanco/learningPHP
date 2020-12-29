<?php
include '../13-Includes/components/head.php';

$error = 'faltan_valores';
if (empty($_POST['name']) && empty($_POST['surname']) && empty($_POST['age']) && empty($_POST['email']) && empty($_POST['pass'])) {
    $error = true;
    header("location:car.php?error=$error");
} else {
    extract($_POST);
    $error = false;
}

var_dump($_POST);

if (!!$error) {
    extract($_POST);
    echo '<h4>Please input all data</h4>';
} else {

    echo '<h1>Datos validados adecuadamente:</h1><h4>' . $name . '</h4><h4>' . $surname . '</h4><h4>' . $age . '</h4><h4>' . $email . '</h4><h4>' . $password . '</h4>';
};

echo isset($name) . '<br>';
echo !!$name . '<br>';


echo gettype(!!$name);