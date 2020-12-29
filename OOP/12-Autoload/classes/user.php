<?php

class User
{
    public $name;
    public $email;

    /**
     * User constructor.
     * @param $name
     * @param $email
     */
    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }


}