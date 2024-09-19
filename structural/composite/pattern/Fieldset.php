<?php

namespace DesignPatterns\Structural\composite\pattern;

class Fieldset extends FieldComposite
{
    public function render(): string
    {
        $output = parent::render();

        return "<fieldset><legend>{$this->title}</legend><br>$output</fieldset><br>";
    }
}