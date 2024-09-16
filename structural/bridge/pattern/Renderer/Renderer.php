<?php

namespace DesignPatterns\Structural\bridge\pattern\Renderer;

interface Renderer
{
    public function header(): string;

    public function title(string $title): string;

    public function content(string $content): string;

    public function avatar(string $avatar): string;

    public function contact(string $contact): string;

    public function footer(): string;

    public function renderBlocks(array $blocks): string;
}