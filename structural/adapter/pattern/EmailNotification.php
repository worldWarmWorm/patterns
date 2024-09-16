<?php

namespace DesignPatterns\Structural\adapter\pattern;

final readonly class EmailNotification implements Notifiable
{
    public function __construct(public string $email)
    {
    }

    public function notification(string $theme, string $content): void
    {
        print_r("
            <h1>You have unread message!</h1>
            <p><bold>[Theme]</bold>: $theme</p>
            <p><bold>[Content]</bold>: Dear $this->email!</p>
            <p>$content</p>
        ");
    }
}