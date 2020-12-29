<?php

trait nameable {

    public function setName(string $name){
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }
}

class CarTraits {
    public $name;
    public $model;

    use nameable;
}

class PersonTraits{
    public $name;
    public $surname;

    use nameable;
}

class VideogameTraits{
    public $name;
    public $genre;

    use nameable;
}

$car = new CarTraits();
$person = new PersonTraits();
$videogame = new VideogameTraits();

$car->setName('Kitt');
echo $car->getName().'<br>';

$person->setName('Hulk Hogan');
echo $person->getName().'<br>';

$videogame->setName('Yakuza0');
echo $videogame->getName();