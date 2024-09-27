<?php

namespace DesignPatterns\Creational\Builder\Pattern;

final class PgSqlQueryBuilder extends MySqlQueryBuilder
{
    public function limit(int $start, int $offset): QueryBuilder
    {
        parent::limit($start, $offset);

        $this->query->limit = " LIMIT " . $start . " OFFSET " . $offset;

        return $this;
    }
}