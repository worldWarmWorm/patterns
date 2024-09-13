<?php

namespace structural\adapter\pattern;

use Notifiable;

final readonly class EmailNotification implements Notifiable
{
    public function __construct(public string $email)
    {
    }

    public function notification(string $theme, string $content): void
    {
        print_r("You have unread message!\n[Theme]: $theme\n[Content]: Dear $this->email!\n$content");
    }
}