<?php

use DesignPatterns\Creational\factory_method\pattern\instagram\InstagramPoster;
use DesignPatterns\Creational\factory_method\pattern\Poster;
use DesignPatterns\Creational\factory_method\pattern\vk\VKPoster;

function code(Poster $creator): void
{
    $creator->post("Hello world!");
    $creator->post("I had a large hamburger this morning!");
}

code(new VKPoster("john_doe", "******"));
echo "<br><br>";
code(new InstagramPoster("john_doe@example.com", "******"));