<?php

namespace DesignPatterns\Structural\Proxy\Pattern;

interface Downloadable
{
    public function download(string $url): string;
}