<?php

namespace App\Core\Database;

use PDO;

class QueryBuilder
{

    protected $pdo;


    public function __construct($pdo)
    
    {

        $this->pdo = $pdo;
    
    }

    public function read($table, $value) {

        $statement = $this->pdo->prepare("select * from {$table} WHERE id = {$value}");

        $statement->execute();

        return $statement->fetch(PDO::FETCH_OBJ);

    }
}
