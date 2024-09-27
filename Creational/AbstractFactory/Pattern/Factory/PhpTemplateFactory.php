<?php

namespace DesignPatterns\Creational\AbstractFactory\Pattern\Factory;

use DesignPatterns\Creational\AbstractFactory\Pattern\Renderer\{PhpTemplateRenderer, TemplateRenderer};
use DesignPatterns\Creational\AbstractFactory\Pattern\Template\Interface\{PageTemplate,TitleTemplate};
use DesignPatterns\Creational\AbstractFactory\Pattern\Template\Php\{PhpPageTemplate, PhpTitleTemplate};

final class PhpTemplateFactory implements TemplateFactory
{
    public function createTitleTemplate(): TitleTemplate
    {
        return new PhpTitleTemplate();
    }

    public function createPageTemplate(): PageTemplate
    {
        return new PhpPageTemplate($this->createTitleTemplate());
    }

    public function getRenderer(): TemplateRenderer
    {
        return new PhpTemplateRenderer();
    }
}