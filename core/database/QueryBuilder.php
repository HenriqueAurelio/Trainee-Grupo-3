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


    public function selectAll($table){
    
        $statement = $this->pdo->prepare("select * from {$table}");
        $statement->execute();
    
        return $statement->fetchAll(PDO::FETCH_CLASS);

    }

    public function selectCategory($category, $table, $value) {

        $statement = $this->pdo->prepare("select {$category} from {$table} WHERE id = {$value}");

        $statement->execute();

        return $statement->fetch(PDO::FETCH_OBJ);

    }
    
}
