<?php
require_once 'car.php';

$car = new Car('León', 'blue', 'Seat', 200, 5, 2020, '2839HJK');
$car2 = new Car('Arosa', 'white', 'Seat', 90, 4, 2000, '2583JRK');

// $car->speed = 120;
$car->accelerate();

echo $car -> showInfo();