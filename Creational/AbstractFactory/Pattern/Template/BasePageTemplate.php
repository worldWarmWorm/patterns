<?php

namespace DesignPatterns\Creational\AbstractFactory\Pattern\Template;

use DesignPatterns\Creational\AbstractFactory\Pattern\Template\Interface\{PageTemplate, TitleTemplate};

abstract class BasePageTemplate implements PageTemplate
{
    public function __construct(protected TitleTemplate $titleTemplate)
    {
    }
}