<?php

$cosa = 3;

if ($cosa == "3") echo "hola ";
if ($cosa === "3") {
    echo "amigo";
} else {
    echo "señor";
}

if ($cosa <3) {
    echo "<h1>$cosa es menor que 3</h1>";
} elseif ($cosa >3) {
    echo "<h1>$cosa es mayor que 3</h1>";
} else {
    echo "<h1>$cosa es igual que 3</h1>";
}

if(!!$cosa) echo '<h1>YES!</h1>';

//con los goto te saltas un trozo del código para ir directamente al punto indicado.
goto ejecuta_esto;
echo '<h1>Yes</h1>';
echo '<h1>No</h1>';
echo '<h1>Maybe</h1>';
echo '<h1>IDK</h1>';

ejecuta_esto:
echo '<h1>Me he saltado cuatro echos!</h1>';

if (!!$_GET['num']){
    echo 1;
} else {
    echo 2;
}