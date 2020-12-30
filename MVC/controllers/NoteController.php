<?php

class NoteController
{
    public function list()
    {
        require_once 'models/Note.php';
        $note = new Note();
        $notes = $note->fetchAll('notes');
        require_once 'views/Note/list.php';
    }

    public function create()
    {
        require_once 'models/Note.php';
        $note = new Note();
        $note->setUserId(1);
        $note->setTitle("New dummy note");
        $note->setDescription("These dummy notes have a set title and description");
        $savedNote = $note->saveNewNote();
        if (!$savedNote) {
            echo $note->db->error;
            die();
        }
        header("location: index.php?controller=NoteController&action=list");
    }

    public function delete()
    {
    }
}