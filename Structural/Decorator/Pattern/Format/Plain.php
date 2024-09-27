<?php

namespace DesignPatterns\Structural\Decorator\Pattern\Format;

final class Plain extends Text
{
    public function format(string $text): string
    {
        return strip_tags(parent::format($text));
    }
}