<?php

require_once 'config/database.php';
class Base
{
    public $db;

    /**
     * Base constructor.
     */
    public function __construct()
    {
        $this->db = database::connect();
    }

    public function fetchAll()
    {
        var_dump($this->db);
        return 'Fetching all...<br>';
    }
}