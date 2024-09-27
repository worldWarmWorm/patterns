<?php

namespace DesignPatterns\Creational\prototype\Pattern;

final class Author
{
    /**
     * @var array<Page>
     */
    private array $pages = [];

    public function __construct(private string $name)
    {
    }

    public function addToPage(Page $page): void
    {
        $this->pages[] = $page;
    }
}