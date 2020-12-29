<?php

class UserConstants
{

    public $email;
    public $password;
    const ID = '1';

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password): void
    {
        $this->password = $password;
    }
}

$constants = new UserConstants();
var_dump(new UserConstants()) . '<br>';
var_dump($constants) . '<br>';
echo $constants::ID;