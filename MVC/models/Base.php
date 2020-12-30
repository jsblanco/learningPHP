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

    public function fetchAll($table)
    {
        $query = $this->db->query("SELECT * FROM $table ORDER BY id ASC");
        return $query;
    }
}