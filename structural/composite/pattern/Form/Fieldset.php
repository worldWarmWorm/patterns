<?php

namespace DesignPatterns\Structural\composite\pattern\Form;

use DesignPatterns\Structural\composite\pattern\Composite;

class Fieldset extends Composite
{
    public function render(): string
    {
        $output = parent::render();

        return "<fieldset><legend>$this->title</legend><br>$output</fieldset><br>";
    }
}