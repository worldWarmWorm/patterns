<?php

final class TelegramNotification implements Notifiable
{
    public function __construct(public readonly string $account)
    {
    }

    public function notification(string $theme, string $content): void
    {
        print_r("$this->account, hello!\n[Theme]: $theme\n[Content]: $content");
    }
}