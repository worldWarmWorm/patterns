<?php

namespace DesignPatterns\Structural\decorator\pattern;

class TextFormater implements Formatable
{

    public function format(string $text): string
    {
        return $text;
    }
}