<?php

class UserController
{
    public function fetchAll(){
        require_once 'models/User.php';
        $user = new User();
        $allUsers = $user->fetchAll();
        require_once 'views/User/fetchAll.php';
    }

    public function create(){
        require_once 'views/User/create.php';
    }
}
