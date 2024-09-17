<?php

namespace DesignPatterns\Structural\decorator\pattern;

interface Formatable
{
    public function format(string $text): string;
}