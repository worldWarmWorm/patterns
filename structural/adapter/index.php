<?php

function sendMessage(Notifiable $notifiable): void
{
    $notifiable->notification('Party at Saturday night', 'You just invited at Saturday night party');
}

sendMessage(new EmailNotification('example@email.com'));
sendMessage(new TelegramNotification('@valery_davydkin'));