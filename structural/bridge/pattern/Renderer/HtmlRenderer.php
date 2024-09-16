<?php

namespace DesignPatterns\Structural\bridge\pattern\Renderer;

final class HtmlRenderer implements Renderer
{
    public function header(): string
    {
        return "<html lang='en'><body>";
    }

    public function title(string $title): string
    {
        return "<h1>$title</h1>";
    }

    public function content(string $content): string
    {
        return "<p>$content</p>";
    }

    public function avatar(string $avatar): string
    {
        return "<img src='$avatar' alt='avatar' height='50' width='50'>";
    }

    public function contact(string $contact): string
    {
        return "<a href='mailto:$contact'>$contact</a>";
    }

    public function footer(): string
    {
        return "</body></html>";
    }

    public function renderBlocks(array $blocks): string
    {
        return implode("\n", $blocks);
    }
}