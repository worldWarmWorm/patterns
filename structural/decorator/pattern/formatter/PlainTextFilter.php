<?php

namespace DesignPatterns\Structural\decorator\pattern\formatter;

class PlainTextFilter extends TextFormat
{
    public function formatText(string $text): string
    {
        return strip_tags(parent::formatText($text));
    }
}