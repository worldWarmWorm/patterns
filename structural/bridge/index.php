<?php

use DesignPatterns\Structural\bridge\pattern\Page\AccountPage;
use DesignPatterns\Structural\bridge\pattern\Page\Page;
use DesignPatterns\Structural\bridge\pattern\Page\RegularPage;
use DesignPatterns\Structural\bridge\pattern\Renderer\Entity\Account;
use DesignPatterns\Structural\bridge\pattern\Renderer\HtmlRenderer;
use DesignPatterns\Structural\bridge\pattern\Renderer\JsonRenderer;

function clientCode(Page $page): void
{
    echo $page->view();
}

$htmlRenderer = new HtmlRenderer();
$jsonRenderer = new JsonRenderer();

$page = new RegularPage($htmlRenderer, 'Regular page','Regular content');
clientCode($page);

$page->changeRenderer($jsonRenderer);
clientCode($page);

$accountPage = new AccountPage(
    $htmlRenderer,
    new Account('Valery', '/src/img/avatar.png', 'Developer', '@valery_good')
);
//
clientCode($accountPage);
$accountPage->changeRenderer($jsonRenderer);
clientCode($accountPage);