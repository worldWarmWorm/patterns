<?php

namespace structural\bridge\pattern\Pages;

use structural\bridge\pattern\Renderer;

final class RegularPage extends Page
{
    protected string $title;

    protected string $content;

    public function __construct(Renderer $renderer, string $title, string $content)
    {
        parent::__construct($renderer);

        $this->title = $title;
        $this->content = $content;
    }

    public function view(): string
    {
        return $this->renderer->renderBlocks([
            $this->renderer->header(),
            $this->renderer->title($this->title),
            $this->renderer->content($this->content)(),
            $this->renderer->footer(),
        ]);
    }
}