<?php

namespace structural\adapter\pattern;

use Notifiable;

final readonly class TelegramNotification implements Notifiable
{
    public function __construct(public string $account)
    {
    }

    public function notification(string $theme, string $content): void
    {
        print_r("$this->account, hello!\n[Theme]: $theme\n[Content]: $content");
    }
}