<?php

use DesignPatterns\Creational\FactoryMethod\Pattern\instagram\InstagramPoster;
use DesignPatterns\Creational\FactoryMethod\Pattern\Poster;
use DesignPatterns\Creational\FactoryMethod\Pattern\VK\VKPoster;

function code(Poster $creator): void
{
    $creator->post("Hello world!");
    $creator->post("I had a large hamburger this morning!");
}

code(new VKPoster("john_doe", "******"));
echo "<br><br>";
code(new InstagramPoster("john_doe@example.com", "******"));