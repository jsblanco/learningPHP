<?php

$name ="Jorge Sánchez";
var_dump($name);

echo date('d-m-Y').'<br>';
echo time().'<br>';
echo 'Raíz cuadrada de 288: '.sqrt(288).'<br>';
echo 'Número aleatorio: '.rand().'<br>';
echo 'Número aleatorio entre 10 y 50: '.rand(10,50).'<br>';
echo pi().'<br>';
echo 'Redondeo de pi a dos decimales: '.round(pi(), 2).'<br>';
echo gettype($name).'<br>';
if (!is_array($name)){
    echo 'La variable $name no es un array'.'<br>';
};
echo isset($name).'<br>';
echo isset($thisvariabledoesnotexist).'<br>';;

$untrimmedVar = "           hola       ";
echo trim($untrimmedVar).'<br>';
unset($untrimmedVar);
echo isset($untrimmedVar);
$emptyVar = "";
if (empty($emptyVar)) echo '$emptyVar está vacía'.'<br>';
$falseVar = false;
if (empty($falseVar)) echo '$falseVar está vacía'.'<br>';

echo strlen($name).'<br>';
$frase = "Aúpa Atleti";
echo strpos($frase, "Atleti").'<br>';
echo strpos($frase, "Barça").'<br>';

echo str_replace("Aúpa", "Forza", $frase)."<br>";

echo strtoupper($frase).'<br>';
echo strtolower($frase).'<br>';