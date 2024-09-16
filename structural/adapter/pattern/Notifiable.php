<?php

namespace DesignPatterns\Structural\adapter\pattern;

interface Notifiable
{
    public function notification(string $theme, string $content);
}