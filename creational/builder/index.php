<?php

namespace DesignPatterns\Creational\builder;

use DesignPatterns\Creational\builder\pattern\MySqlQueryBuilder;
use DesignPatterns\Creational\builder\pattern\PgSqlQueryBuilder;
use DesignPatterns\Creational\builder\pattern\QueryBuilder;

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