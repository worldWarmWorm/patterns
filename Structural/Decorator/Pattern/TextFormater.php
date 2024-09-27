<?php

namespace DesignPatterns\Structural\Decorator\Pattern;

class TextFormater implements Formatable
{

    public function format(string $text): string
    {
        return $text;
    }
}