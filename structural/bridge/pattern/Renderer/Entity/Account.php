<?php

namespace DesignPatterns\Structural\bridge\pattern\Renderer\Entity;

final readonly class Account
{
    public function __construct(
        private string $name,
        private string $avatar,
        private string $info,
        private string $link,
    ) {}

    public function getName(): string
    {
        return $this->name;
    }

    public function getAvatar(): string
    {
        return $this->avatar;
    }

    public function getInfo(): string
    {
        return $this->info;
    }

    public function getLink(): string
    {
        return $this->link;
    }
}