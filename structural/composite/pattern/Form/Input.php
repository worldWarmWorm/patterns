<?php

namespace DesignPatterns\Structural\composite\pattern\Form;

class Input extends FormElement
{
    public function __construct(
        string $name,
        string $title,
        private readonly string $type
    ) {
        parent::__construct($name, $title);
    }

    public function render(): string
    {
        return "<label for='$this->name'>$this->title</label><br>" .
            "<input name='$this->name' type='$this->type' value='$this->data'><br>";
    }
}