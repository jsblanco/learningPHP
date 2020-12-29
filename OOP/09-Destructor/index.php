<?php

class UserDestroy {
    public $nick ="Jorge";
    public $password = "123456";

    /**
     * UserDestroy constructor.
     */
    public function __construct()
    {
        echo 'New class instance created<br>';
    }

    public function __toString()
    {
        return 'User '.$this->nick.' selected<br>';
    }

    public function __destruct()
    {
        echo 'Class instance destroyed<br>';
    }

}

$user = new UserDestroy();

for ($i =0; $i<=10; $i++){
  echo $i.'<br>';
};
 echo $user->nick.'<br>';
 echo $user;
