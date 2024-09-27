<?php

namespace DesignPatterns\Structural\Adapter;

use DesignPatterns\Structural\Adapter\Pattern\EmailNotification;
use DesignPatterns\Structural\Adapter\Pattern\Notifiable;
use DesignPatterns\Structural\Adapter\Pattern\TelegramNotification;

function sendMessage(Notifiable $notifiable): void
{
    $notifiable->notification('Party at Saturday night', 'You just invited at Saturday night party');
}

sendMessage(new EmailNotification('example@email.com'));
sendMessage(new TelegramNotification('@valery_davydkin'));