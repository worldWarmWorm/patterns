<?php

namespace DesignPatterns\Creational\FactoryMethod\Pattern;

interface Connector
{
    public function logIn(): void;

    public function logOut(): void;

    public function createPost($content): void;
}