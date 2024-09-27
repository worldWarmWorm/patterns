<?php

namespace DesignPatterns\Structural\Composite\Pattern\Form;

use DesignPatterns\Structural\Composite\Pattern\Composite;

class Fieldset extends Composite
{
    public function render(): string
    {
        $output = parent::render();

        return "<fieldset><legend>$this->title</legend><br>$output</fieldset><br>";
    }
}