<?php

namespace DesignPatterns\Creational\AbstractFactory\Pattern\Renderer;

/**
 * Отрисовщик шаблонов Twig.
 */
class TwigRenderer implements TemplateRenderer
{
    public function render(string $templateString, array $arguments = []): string
    {
        return \Twig::render($templateString, $arguments);
    }
}