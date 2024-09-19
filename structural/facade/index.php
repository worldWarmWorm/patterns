<?php

use DesignPatterns\Structural\facade\pattern\App;

function clientCode(): void
{
    $user = App::createUser('Valery', 32, 'valery@gmail.com');

    var_dump($user);
}

clientCode();