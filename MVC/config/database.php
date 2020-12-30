<?php

class database
{
    public static function connect(){
        $connexion = new mysqli('127.0.0.1', 'root', '', 'notes_mvc');
        $connexion->query("SET NAMES 'utf8'");

        return $connexion;
    }
}