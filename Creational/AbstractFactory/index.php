<?php




/**
 * Теперь в других частях приложения клиентский код может принимать фабричные
 * объекты любого типа.
 */


use DesignPatterns\Creational\AbstractFactory\Pattern\Factory\PhpTemplateFactory;
use DesignPatterns\Creational\AbstractFactory\Pattern\Page;

$page = new Page('Sample page', 'This is the body.');

echo "Testing actual rendering with the PHPTemplate factory:\n";
echo $page->render(new PhpTemplateFactory());


// Можете убрать комментарии, если у вас установлен Twig.

// echo "Testing rendering with the Twig factory:\n"; echo $page->render(new
// TwigTemplateFactory());