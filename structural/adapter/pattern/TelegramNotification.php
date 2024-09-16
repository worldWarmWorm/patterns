<?php

namespace DesignPatterns\Structural\adapter\pattern;

final readonly class TelegramNotification implements Notifiable
{
    public function __construct(public string $account)
    {
    }

    public function notification(string $theme, string $content): void
    {
        print_r("
            <h1>$this->account, hello!</h1>
            <p><bold>[Theme]:</bold>$theme</p>
            <p><bold>[Content]:</bold>$content</p>
        ");
    }
}