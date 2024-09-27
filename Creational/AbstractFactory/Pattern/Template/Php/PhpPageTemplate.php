<?php

namespace DesignPatterns\Creational\AbstractFactory\Pattern\Template\Php;

use DesignPatterns\Creational\AbstractFactory\Pattern\Template\BasePageTemplate;

final class PhpPageTemplate extends BasePageTemplate
{
    public function getTemplateString(): string
    {
        return <<<HTML
        <div class="page">
            {$this->titleTemplate->getTemplateString()}
            <article class="content"><?= \$content; ?></article>
        </div>
        HTML;
    }
}