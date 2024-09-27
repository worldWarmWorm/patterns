<?php

namespace DesignPatterns\Creational\AbstractFactory\Pattern;

use DesignPatterns\Creational\AbstractFactory\Pattern\Factory\TemplateFactory;

final class Page
{
    public function __construct(public string $title, public string $content)
    {
    }

    public function render(TemplateFactory $factory): string
    {
        $pageTemplate = $factory->createPageTemplate();
        $renderer = $factory->getRenderer();

        return $renderer->render(
            $pageTemplate->getTemplateString(),
            [
                'title' => $this->title,
                'content' => $this->content
            ]
        );
    }
}
