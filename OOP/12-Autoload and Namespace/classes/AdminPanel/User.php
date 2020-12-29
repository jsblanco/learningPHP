<?php

namespace AdminPanel;

class User {
    public $name;
    public $email;
    public $role;

    /**
     * User constructor.
     * @param $name
     * @param $email
     * @param $role
     */
    public function __construct($name, $email, $role)
    {
        $this->name = $name;
        $this->email = $email;
        $this->role = $role;
    }


}