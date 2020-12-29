<?php

class NoteController
{
    public function list()
    {
        require_once 'models/Note.php';
        $note = new Note();
        $note->setName('Note title');
        $note->setContent('This is the note\'s content');
        require_once 'views/Note/list.php';
    }

    public function create()
    {
    }

    public function delete()
    {
    }
}