<?php

namespace DesignPatterns\Structural\composite\pattern;

class Form extends FieldComposite
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