<?php

namespace DesignPatterns\Structural\Decorator\Pattern;

interface Formatable
{
    public function format(string $text): string;
}