<?php

namespace DesignPatterns\Creational\AbstractFactory\Pattern\Template\Twig;

use DesignPatterns\Creational\AbstractFactory\Pattern\Template\Interface\TitleTemplate;

final class TwigTitleTemplate implements TitleTemplate
{
    public function getTemplateString(): string
    {
        return <<<HTML
            <h1>{{ title }}</h1>
        HTML;
    }
}