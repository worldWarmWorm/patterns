<?php

namespace DesignPatterns\Structural\decorator\pattern;

use DesignPatterns\Structural\decorator\pattern\formatter\InputFormat;

class TextInput implements InputFormat
{

    public function formatText(string $text): string
    {
        return $text;
    }
}