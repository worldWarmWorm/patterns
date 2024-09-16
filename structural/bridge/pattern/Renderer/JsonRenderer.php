<?php

namespace DesignPatterns\Structural\bridge\pattern\Renderer;

class JsonRenderer implements Renderer
{
    public function header(): string
    {
        return '';
    }

    public function title(string $title): string
    {
        return '"title": "' . $title . '"';
    }

    public function content(string $content): string
    {
        return '"content": "' . $content . '"';
    }

    public function avatar(string $avatar): string
    {
        return '"avatar": "' . $avatar . '"';
    }

    public function contact(string $contact): string
    {
        return '"contact": "' . $contact . '"';
    }

    public function footer(): string
    {
        return '';
    }

    public function renderBlocks(array $blocks): string
    {
        return "{\n" . implode(",\n", array_filter($blocks)) . "\n}";
    }
}