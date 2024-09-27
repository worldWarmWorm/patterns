<?php

namespace DesignPatterns\Creational\AbstractFactory\Pattern\Factory;

use DesignPatterns\Creational\AbstractFactory\Pattern\Renderer\{TemplateRenderer, TwigRenderer};
use DesignPatterns\Creational\AbstractFactory\Pattern\Template\Interface\{PageTemplate, TitleTemplate};
use DesignPatterns\Creational\AbstractFactory\Pattern\Template\Twig\{TwigPageTemplate, TwigTitleTemplate};

final class TwigTemplateFactory implements TemplateFactory
{
    public function createTitleTemplate(): TitleTemplate
    {
        return new TwigTitleTemplate();
    }

    public function createPageTemplate(): PageTemplate
    {
        return new TwigPageTemplate($this->createTitleTemplate());
    }

    public function getRenderer(): TemplateRenderer
    {
        return new TwigRenderer();
    }
}