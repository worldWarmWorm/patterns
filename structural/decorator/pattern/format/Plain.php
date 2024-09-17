<?php

namespace DesignPatterns\Structural\decorator\pattern\format;

final class Plain extends Text
{
    public function format(string $text): string
    {
        return strip_tags(parent::format($text));
    }
}