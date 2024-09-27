<?php

namespace DesignPatterns\Creational\AbstractFactory\Pattern\Template\Twig;

use DesignPatterns\Creational\AbstractFactory\Pattern\Template\BasePageTemplate;

final class TwigPageTemplate extends BasePageTemplate
{
    public function getTemplateString(): string
    {
        return <<<HTML
        <div class="page">
            {$this->titleTemplate->getTemplateString()}
            <article class="content">{{ content }}</article>
        </div>
        HTML;
    }
}