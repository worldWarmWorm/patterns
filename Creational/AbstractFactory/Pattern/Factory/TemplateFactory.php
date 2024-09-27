<?php

namespace DesignPatterns\Creational\AbstractFactory\Pattern\Factory;

use DesignPatterns\Creational\AbstractFactory\Pattern\Renderer\TemplateRenderer;
use DesignPatterns\Creational\AbstractFactory\Pattern\Template\Interface\{PageTemplate, TitleTemplate};

interface TemplateFactory
{
    public function createTitleTemplate(): TitleTemplate;

    public function createPageTemplate(): PageTemplate;

    public function getRenderer(): TemplateRenderer;
}