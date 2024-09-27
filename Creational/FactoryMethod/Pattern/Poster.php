<?php

namespace DesignPatterns\Creational\FactoryMethod\Pattern;

abstract class Poster
{
    abstract public function getSocialNetwork(): Connector;

    public function post(string $content): void
    {
        $network = $this->getSocialNetwork();
        $network->logIn();
        $network->createPost($content);
        $network->logout();
    }
}