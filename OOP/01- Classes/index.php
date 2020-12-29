<?php

class OldCar
{

    public $model = 'Sandero';
    public $color = 'Black';
    public $brand = 'Dacia';
    public $horsepower = 300;
    public $speed = 0;
    public $seats = 5;
    public $year = 1994;
    public $plateNum = '1337JK';


    /**
     * Car constructor.
     */
    public function __construct()
    {
    }

    public function accelerate()
    {
        if ($this->speed < 120) $this->speed += 20;
        echo $this-> speed.' km/h';
    }

    public function brake()
    {
        if ($this->speed > 0) $this->speed -= 20;
        echo $this-> speed.' km/h';
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param mixed $model
     */
    public function setModel($model): void
    {
        $this->model = $model;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color): void
    {
        $this->color = $color;
    }

    /**
     * @return mixed
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @param mixed $brand
     */
    public function setBrand($brand): void
    {
        $this->brand = $brand;
    }

    /**
     * @return mixed
     */
    public function getHorsepower()
    {
        return $this->horsepower;
    }

    /**
     * @param mixed $horsepower
     */
    public function setHorsepower($horsepower): void
    {
        $this->horsepower = $horsepower;
    }

    /**
     * @return mixed
     */
    public function getSeats()
    {
        return $this->seats;
    }

    /**
     * @param mixed $seats
     */
    public function setSeats($seats): void
    {
        $this->seats = $seats;
    }

    /**
     * @return mixed
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * @param mixed $year
     */
    public function setYear($year): void
    {
        $this->year = $year;
    }

    /**
     * @return mixed
     */
    public function getPlateNum()
    {
        return $this->plateNum;
    }

    /**
     * @param mixed $plateNum
     */
    public function setPlateNum($plateNum): void
    {
        $this->plateNum = $plateNum;
    }
}

$newCar = new Car();

echo $newCar->getPlateNum();
$newCar -> accelerate();
$newCar -> accelerate();
$newCar -> accelerate();
$newCar -> accelerate();
$newCar -> brake();