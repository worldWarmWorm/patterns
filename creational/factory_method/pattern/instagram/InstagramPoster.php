<?php

namespace DesignPatterns\Creational\factory_method\pattern\instagram;

use DesignPatterns\Creational\factory_method\pattern\Connector;
use DesignPatterns\Creational\factory_method\pattern\Poster;

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