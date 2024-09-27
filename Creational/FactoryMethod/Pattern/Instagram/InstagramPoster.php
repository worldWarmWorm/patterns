<?php

namespace DesignPatterns\Creational\FactoryMethod\Pattern\Instagram;

use DesignPatterns\Creational\FactoryMethod\Pattern\Connector;
use DesignPatterns\Creational\FactoryMethod\Pattern\Poster;

class InstagramPoster extends Poster
{
    public function __construct(private readonly string $login, private readonly string $password)
    {
    }

    public function getSocialNetwork(): Connector
    {
        return new InstagramConnector($this->login, $this->password);
    }
}