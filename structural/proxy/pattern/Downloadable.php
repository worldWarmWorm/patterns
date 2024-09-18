<?php

namespace DesignPatterns\Structural\proxy\pattern;

interface Downloadable
{
    public function download(string $url): string;
}