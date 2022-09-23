<?php

class QueryBuilder
{
    protected $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function all($table) {
        $statement = $this->pdo->prepare("SELECT * from {$table}");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function insert($table, $parameters) {
        $sql = sprintf('INSERT INTO %s (%s) VALUES (%s)',
        $table,
        implode(', ', array_keys($parameters)),
        ':' . implode(', :', array_keys($parameters)));

        $statement = $this->pdo->prepare($sql);
        $statement->execute($parameters);
    }
}