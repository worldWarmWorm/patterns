<?php

namespace DesignPatterns\Creational\builder\pattern;

interface QueryBuilder
{
    public function select(string $table, array $fields): QueryBuilder;

    public function where(string $field, string $value, string $operator = '='): QueryBuilder;

    public function limit(int $start, int $offset): QueryBuilder;

    public function query(): string;
}