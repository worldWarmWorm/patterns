<?php

namespace DesignPatterns\Creational\prototype\pattern;

final class Author
{
    private string $name;

    /**
     * @var array<Page>
     */
    private array $pages = [];

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function addToPage(Page $page): void
    {
        $this->pages[] = $page;
    }
}