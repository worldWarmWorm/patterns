<?php

namespace DesignPatterns\Structural\facade\pattern;

use DesignPatterns\Structural\adapter\pattern\EmailNotification;

final class App
{
    public static function createUser(string $name, int $age, string $email): User
    {
        $user = new User($name, $age, $email);
        $storage = new Storage();

        try {
            $storage->save($user);
        } catch (\Throwable $exception) {
            exit("[Error]: {$exception->getMessage()}");
        }

        $notification = new EmailNotification("office@gmail.com");
        $notification->notification(
            'New user created!',
            "New user just created!<br>
            Name: {$user->getName()}<br>
            Age: {$user->getAge()}<br>
            Email: <a href='mailto:{$user->getEmail()}'>{$user->getEmail()}</a>"
        );

        return $user;
    }
}