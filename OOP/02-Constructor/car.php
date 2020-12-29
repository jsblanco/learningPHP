<?php


class Car
{

    public string $color;
    protected string $model;
    protected string $brand;
    private int $horsepower;
    private int $speed = 0;
    public int $seats;
    private int $year;
    protected string $plateNumber;

    /**
     * Car constructor.
     * @param $model
     * @param $color
     * @param $brand
     * @param $horsepower
     * @param $seats
     * @param $year
     * @param $plateNumber
     */
    public function __construct($model, $color, $brand, $horsepower, $seats, $year, $plateNumber)
    {
        $this->model = $model;
        $this->color = $color;
        $this->brand = $brand;
        $this->horsepower = $horsepower;
        $this->seats = $seats;
        $this->year = $year;
        $this->plateNumber = $plateNumber;
    }

    public function showInfo(){
        $info = '<h1>Car specs:</h1>';
        foreach ($this as $key => $value) {
            $info.="<h3><b>$key:</b>  $value</h3>";
        }
        return $info;
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
        return $this->plateNumber;
    }

    /**
     * @param mixed $plateNumber
     */
    public function setPlateNum($plateNumber): void
    {
        $this->plateNumber = $plateNumber;
    }
}