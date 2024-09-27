<?php

namespace DesignPatterns\Creational\Prototype\Pattern;

use DateTime;

class Page
{
    private array $comments = [];

    private DateTime $date;

    public function __construct(private string $title, private string $body, private readonly Author $author)
    {
        $this->author->addToPage($this);
        $this->date = new DateTime();
    }

    public function addComment(string $comment): void
    {
        $this->comments[] = $comment;
    }

    public function __clone()
    {
        $this->title = "Copy of " . $this->title;
        $this->author->addToPage($this);
        $this->comments = [];
        $this->date = new \DateTime();
    }
}