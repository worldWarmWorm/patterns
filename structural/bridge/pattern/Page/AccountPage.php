<?php

namespace DesignPatterns\Structural\bridge\pattern\Page;


use DesignPatterns\Structural\bridge\pattern\Renderer\Entity\Account;
use DesignPatterns\Structural\bridge\pattern\Renderer\Renderer;

final class AccountPage extends Page
{
    protected Account $account;

    public function __construct(Renderer $renderer, Account $account)
    {
        parent::__construct($renderer);

        $this->account = $account;
    }

    public function view(): string
    {
        return $this->renderer->renderBlocks([
            $this->renderer->header(),
            $this->renderer->title($this->account->getName()),
            $this->renderer->avatar($this->account->getAvatar()),
            $this->renderer->content($this->account->getInfo()),
            $this->renderer->contact($this->account->getLink()),
            $this->renderer->footer(),
        ]);
    }
}