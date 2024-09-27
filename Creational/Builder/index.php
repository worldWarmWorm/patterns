<?php

namespace DesignPatterns\Creational\Builder;

use DesignPatterns\Creational\Builder\Pattern\MySqlQueryBuilder;
use DesignPatterns\Creational\Builder\Pattern\PgSqlQueryBuilder;
use DesignPatterns\Creational\Builder\Pattern\QueryBuilder;

function code(QueryBuilder $queryBuilder): void
{
    echo $queryBuilder
        ->select("users", ["name", "email", "password"])
        ->where("age", 18, ">")
        ->where("age", 30, "<")
        ->limit(10, 20)
        ->query();
}

// if ($_ENV['database_type'] == 'postgres') {
//     $builder = new PostgresQueryBuilder();
// } else {
//     $builder = new MysqlQueryBuilder();
// }
//
// code($builder);


echo "MySqlQueryBuilder:<br>";
code(new MySqlQueryBuilder());

echo "<br><br>";

echo "PgSqlQueryBuilder:<br>";
code(new PgSqlQueryBuilder());