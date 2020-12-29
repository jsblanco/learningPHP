<?php

namespace DummyClasses;

class Post
{
    public $title;
    public $date;

    /**
     * User constructor.
     * @param $title
     * @param $date
     */
    public function __construct($title, $date)
    {
        $this->title = $title;
        $this->date = $date;
    }
}