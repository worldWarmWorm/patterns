<?php

namespace DesignPatterns\Structural\decorator\pattern\format;

use DesignPatterns\Structural\decorator\pattern\Formatable;

final class Text implements Formatable
{
    public function __construct(protected Formatable $format)
    {
    }

    public function format(string $text): string
    {
        return $this->format->format($text);
    }
}