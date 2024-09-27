<?php

use DesignPatterns\Creational\prototype\Pattern\Author;
use DesignPatterns\Creational\prototype\Pattern\Page;

function code(): void
{
    $author = new Author("John Doe");
    $page = new Page("Tip of the day", "Keep calm and carry on.", $author);

    $page->addComment("Nice tip, thanks!");

    $draft = clone $page;
    echo "Dump of the clone. Note that the author is now referencing two objects.<br><br>";
    var_dump($draft);
}

code();