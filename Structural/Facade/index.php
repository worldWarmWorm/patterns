<?php

use DesignPatterns\Structural\facade\Pattern\App;

function clientCode(): void
{
    $user = App::createUser('Valery', 32, 'valery@gmail.com');

    var_dump($user);
}

code();