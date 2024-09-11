<?php

final class EmailNotification implements Notifiable
{
    public function __construct(public readonly string $email)
    {
    }

    public function notification(string $theme, string $content): void
    {
        print_r("You have unread message!\n[Theme]: $theme\n[Content]: Dear $this->email!\n$content");
    }
}