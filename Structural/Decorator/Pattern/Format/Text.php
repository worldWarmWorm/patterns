<?php

namespace DesignPatterns\Structural\Decorator\Pattern\Format;

use DesignPatterns\Structural\Decorator\Pattern\Formatable;

class Text implements Formatable
{
    public function __construct(protected Formatable $format)
    {
    }

    public function format(string $text): string
    {
        return $this->format->format($text);
    }
}