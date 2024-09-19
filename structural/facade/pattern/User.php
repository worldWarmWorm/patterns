<?php

namespace DesignPatterns\Structural\facade\pattern;

final readonly class User
{
    public function __construct(
        private string $name,
        private int    $age,
        private string $email
    ) {}

    public function getName(): string
    {
        return $this->name;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function getEmail(): string
    {
        return $this->email;
    }
}