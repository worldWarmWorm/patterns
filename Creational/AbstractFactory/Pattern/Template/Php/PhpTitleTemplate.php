<?php

namespace DesignPatterns\Creational\AbstractFactory\Pattern\Template\Php;

use DesignPatterns\Creational\AbstractFactory\Pattern\Template\Interface\TitleTemplate;

final class PhpTitleTemplate implements TitleTemplate
{
    public function getTemplateString(): string
    {
        return <<<HTML
            <h1><?= \$title; ?></h1>
        HTML;
    }
}