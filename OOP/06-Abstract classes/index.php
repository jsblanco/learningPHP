<?php

abstract class AbstractComputer
{

    public $isOn = false;

    abstract public function powerOn();

    public function powerOff()
    {
        $this->isOn = false;
    }
}

class ActualComputer extends AbstractComputer {
    public $bios;

    public function powerOn()
    {
        $this->isOn = true;
    }

    public function runBios()
    {
        $this->bios = true;
    }

    public function exitBios()
    {
        $this->bios = false;
    }
}

$computer = new ActualComputer();
var_dump($computer);