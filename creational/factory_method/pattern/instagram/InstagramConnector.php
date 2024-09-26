<?php

namespace DesignPatterns\Creational\factory_method\pattern\instagram;

use DesignPatterns\Creational\factory_method\pattern\Connector;

readonly class InstagramConnector implements Connector
{
    public function __construct(private string $login, private string $password)
    {
    }

    public function logIn(): void
    {
        echo "Send HTTP API request to log in user $this->login with password $this->password<br>";
    }

    public function logOut(): void
    {
        echo "Send HTTP API request to log out user $this->login<br>";
    }

    public function createPost($content): void
    {
        echo "Send HTTP API requests to create a post in Instagram timeline.<br>";
    }
}