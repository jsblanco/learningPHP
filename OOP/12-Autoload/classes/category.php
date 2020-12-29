<?php

class Category
{
    public $name;
    public $description;

    /**
     * Category constructor.
     * @param $name
     * @param $description
     */
    public function __construct($name, $description)
    {
        $this->name = $name;
        $this->description = $description;
    }


}