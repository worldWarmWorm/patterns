<?php

namespace DesignPatterns\Structural\bridge\Pattern\Page;

use DesignPatterns\Structural\bridge\Pattern\Renderer\Renderer;

abstract class Page
{
    public function __construct(protected Renderer $renderer)
    {
    }

    public function changeRenderer(Renderer $renderer): void
    {
        $this->renderer = $renderer;
    }

    abstract public function view(): string;
}