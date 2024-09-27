<?php

use DesignPatterns\Structural\Bridge\Pattern\Entity\Account;
use DesignPatterns\Structural\Bridge\Pattern\Page\AccountPage;
use DesignPatterns\Structural\Bridge\Pattern\Page\Page;
use DesignPatterns\Structural\Bridge\Pattern\Page\RegularPage;
use DesignPatterns\Structural\Bridge\Pattern\Renderer\HtmlRenderer;
use DesignPatterns\Structural\Bridge\Pattern\Renderer\JsonRenderer;

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