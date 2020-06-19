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


    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from {$table}");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
      
      
    }

    public function insert($table, $parameters)
    {
        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            $table,
            implode(', ', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters))
        );

        try {
            $statement = $this->pdo->prepare($sql);

            $statement->execute($parameters);
        } catch (\Exception $e) {
            //         
        } 
         
    }
    public function edit($table, $params, $id)
    {
        $i = 1;
        $sql = "UPDATE " . $table . " SET ";
        foreach($params as $key => $value) {
            if ($i == count($params)) {
                $sql .= $key . " = '" . $value . "' ";
            }
            else {
                $sql .= $key . " = '" . $value . "', ";
            }
            $i++;
        }
        $sql .= " WHERE id = " . $id;

        try {
            $statement = $this->pdo->prepare($sql);

            $statement->execute();
        } catch(\Exception $e) {
            die('Oh-oh. Some error occurred');
        }
         
    }
    public function read($table, $id)
    {
        $statement = $this->pdo->prepare("SELECT * from {$table} WHERE id = {$id}");
        //die(var_dump($id));
        $statement->execute();
        return $statement->fetch(PDO::FETCH_OBJ);  
    }
    public function delete($table, $id)
    {
        $sql = "DELETE FROM " . $table . " WHERE id = :id";

            $qry = $this->pdo->prepare($sql);
            //die(var_dump($id));

            $qry->bindValue(":id", $id);
            //die(var_dump($qry));
            $qry->execute();
         
    }

    public function editmodifi($table, $id)
    {
        $statement = $this->pdo->prepare("select * from {$table} WHERE id = $id");

        $statement->execute();

        return $statement->fetch(PDO::FETCH_OBJ);
      
      
    }
}
