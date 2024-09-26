<?php

namespace DesignPatterns\Creational\factory_method\pattern;

interface Connector
{
    public function logIn(): void;

    public function logOut(): void;

    public function createPost($content): void;
}