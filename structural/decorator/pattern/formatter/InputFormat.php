<?php

namespace DesignPatterns\Structural\decorator\pattern\formatter;

interface InputFormat
{
    public function formatText(string $text): string;
}