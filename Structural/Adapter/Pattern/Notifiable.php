<?php

namespace DesignPatterns\Structural\Adapter\Pattern;

interface Notifiable
{
    public function notification(string $theme, string $content);
}