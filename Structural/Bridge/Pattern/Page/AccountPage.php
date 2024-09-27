<?php

namespace DesignPatterns\Structural\Bridge\Pattern\Page;


use DesignPatterns\Structural\Bridge\Pattern\Entity\Account;
use DesignPatterns\Structural\Bridge\Pattern\Renderer\Renderer;

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