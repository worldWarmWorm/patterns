<?php

namespace DesignPatterns\Structural\Composite\Pattern\Form;

use DesignPatterns\Structural\composite\Pattern\Composite;

class Form extends Composite
{
    public function __construct(string $name, string $title, protected string $url)
    {
        parent::__construct($name, $title);
    }

    public function render(): string
    {
        $output = parent::render();

        return "<form action='$this->url'><br><h3>$this->title</h3><br>$output</form><br>";
    }
}