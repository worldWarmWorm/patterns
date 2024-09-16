<?php

use structural\bridge\pattern\Entity\Account;
use structural\bridge\pattern\HtmlRenderer;
use structural\bridge\pattern\JsonRenderer;
use structural\bridge\pattern\Pages\AccountPage;
use structural\bridge\pattern\Pages\Page;
use structural\bridge\pattern\Pages\RegularPage;

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

clientCode($accountPage);
$accountPage->changeRenderer($jsonRenderer);
clientCode($accountPage);