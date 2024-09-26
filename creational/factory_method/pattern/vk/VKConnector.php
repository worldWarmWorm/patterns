<?php

namespace DesignPatterns\Creational\factory_method\pattern\vk;


use DesignPatterns\Creational\factory_method\pattern\Connector;

/**
 * А этот Конкретный Продукт реализует API LinkedIn.
 */
readonly class VKConnector implements Connector
{
    public function __construct(private string $email, private string $password)
    {
    }

    public function logIn(): void
    {
        echo "Send HTTP API request to log in user $this->email with password $this->password<br>";
    }

    public function logOut(): void
    {
        echo "Send HTTP API request to log out user $this->email<br>";
    }

    public function createPost($content): void
    {
        echo "Send HTTP API requests to create a post in VK timeline.<br>";
    }
}