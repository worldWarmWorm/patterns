<?php

namespace DesignPatterns\Creational\AbstractFactory\Pattern\Renderer;

interface TemplateRenderer
{
    public function render(string $templateString, array $arguments = []): string;
}