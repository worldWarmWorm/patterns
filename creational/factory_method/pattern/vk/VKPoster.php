<?php

namespace DesignPatterns\Creational\factory_method\pattern\vk;

use DesignPatterns\Creational\factory_method\pattern\Connector;
use DesignPatterns\Creational\factory_method\pattern\Poster;

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