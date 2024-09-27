<?php

namespace DesignPatterns\Creational\Builder\Pattern;

class MySqlQueryBuilder implements QueryBuilder
{
    protected object $query;

    protected function reset(): void
    {
        $this->query = new \stdClass();
    }

    public function select(string $table, array $fields): QueryBuilder
    {
        $this->reset();
        $this->query->base = "SELECT " . implode(", ", $fields) . " FROM " . $table;
        $this->query->type = 'select';

        return $this;
    }

    public function where(string $field, string $value, string $operator = '='): QueryBuilder
    {
        if (!in_array($this->query->type, ['select', 'update', 'delete'])) {
            throw new \Exception("WHERE can only be added to SELECT, UPDATE OR DELETE");
        }

        $this->query->where[] = "$field $operator '$value'";

        return $this;
    }

    public function limit(int $start, int $offset): QueryBuilder
    {
        if ($this->query->type != 'select') {
            throw new \Exception("LIMIT can only be added to SELECT");
        }

        $this->query->limit = " LIMIT " . $start . ", " . $offset;

        return $this;
    }

    public function query(): string
    {
        $query = $this->query;
        $sql = $query->base;

        if (!empty($query->where)) {
            $sql .= " WHERE " . implode(' AND ', $query->where);
        }

        if (isset($query->limit)) {
            $sql .= $query->limit;
        }

        return $sql . ";";
    }
}