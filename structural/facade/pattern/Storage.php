<?php

namespace DesignPatterns\Structural\facade\pattern;

final class Storage
{
    const SOURCE = 'db.json';

    public function save(object $data): void
    {
        file_put_contents(self::SOURCE, json_encode((array)$data), LOCK_EX);
    }
}