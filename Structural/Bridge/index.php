<?php

use DesignPatterns\Structural\bridge\Pattern\Page\AccountPage;
use DesignPatterns\Structural\bridge\Pattern\Page\Page;
use DesignPatterns\Structural\bridge\Pattern\Page\RegularPage;
use DesignPatterns\Structural\bridge\Pattern\Renderer\Entity\Account;
use DesignPatterns\Structural\bridge\Pattern\Renderer\HtmlRenderer;
use DesignPatterns\Structural\bridge\Pattern\Renderer\JsonRenderer;

function clientCode(Page $page): void
{
    echo $page->view();
}

$htmlRenderer = new HtmlRenderer();
$jsonRenderer = new JsonRenderer();

$page = new RegularPage($htmlRenderer, 'Regular page','Regular content');
code($page);

$page->changeRenderer($jsonRenderer);
code($page);

$accountPage = new AccountPage(
    $htmlRenderer,
    new Account('Valery', '/src/img/avatar.png', 'Developer', '@valery_good')
);
//
code($accountPage);
$accountPage->changeRenderer($jsonRenderer);
code($accountPage);