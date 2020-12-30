<?php
require_once 'models/Base.php';

class Note extends Base
{
    public $userId;
    public $title;
    public $description;

    /**
     * Note constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @param mixed $userId
     */
    public function setUserId($userId): void
    {
        $this->userId = $userId;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }

    public function saveNewNote(){
        $sql = "INSERT INTO notes(user_id, title, description, date) VALUES ({$this->userId}, '{$this->title}', '{$this->description}', CURDATE() )";
        $savedNote = $this->db->query($sql);
        return $savedNote;
    }
}
