<?php

interface Computer {
    public function powerOn();
    public function powerOff();
    public function reset();
    public function bootToRecovery();
}

class MyComputer implements Computer {
    public $model;

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

    public function powerOn(){}
    public function powerOff(){}
    public function reset(){}
    public function bootToRecovery(){}

}

$laptop = new MyComputer();
$laptop->setModel('M265-X');
var_dump($laptop);