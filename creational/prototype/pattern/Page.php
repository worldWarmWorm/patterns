<?php

namespace DesignPatterns\Creational\prototype\pattern;

use DateTime;

class Page
{
    private string $title;

    private string $body;

    private Author $author;

    private array $comments = [];

    private DateTime $date;

    // +100 приватных полей.

    public function __construct(string $title, string $body, Author $author)
    {
        $this->title = $title;
        $this->body = $body;
        $this->author = $author;
        $this->author->addToPage($this);
        $this->date = new \DateTime();
    }

    public function addComment(string $comment): void
    {
        $this->comments[] = $comment;
    }

    /**
     * Вы можете контролировать, какие данные вы хотите перенести в
     * клонированный объект.
     *
     * Например, при клонировании страницы:
     * - Она получает новый заголовок «Копия ...».
     * - Автор страницы остаётся прежним. Поэтому мы оставляем ссылку на
     * существующий объект, добавляя клонированную страницу в список страниц
     * автора.
     * - Мы не переносим комментарии со старой страницы.
     * - Мы также прикрепляем к странице новый объект даты.
     */
    public function __clone()
    {
        $this->title = "Copy of " . $this->title;
        $this->author->addToPage($this);
        $this->comments = [];
        $this->date = new \DateTime();
    }
}