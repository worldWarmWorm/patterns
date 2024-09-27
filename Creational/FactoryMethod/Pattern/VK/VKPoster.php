<?php

namespace DesignPatterns\Creational\FactoryMethod\Pattern\VK;

use DesignPatterns\Creational\FactoryMethod\Pattern\Connector;
use DesignPatterns\Creational\FactoryMethod\Pattern\Poster;

class VKPoster extends Poster
{

    public function __construct(private readonly string $email, private readonly string $password)
    {
    }

    public function getSocialNetwork(): Connector
    {
        return new VKConnector($this->email, $this->password);
    }
}