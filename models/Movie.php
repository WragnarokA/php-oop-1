<?php
class Movie
{
    public $genre;
    public $title;
    public $duration;
    public $poster;

    public function __construct(Genre $genre, $title, $duration, $poster)
    {
        $this->genre = $genre;
        $this->title = $title;
        $this->duration = $duration;
        $this->poster = $poster;
    }
}
