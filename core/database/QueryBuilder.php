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

    public function selectAllProducts($table)
    {
      $statement = $this->pdo->prepare("select * from {$table}");

      $statement->execute();

      return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function selectAttrProducts($table, $attr, $id) {
        $statement = $this->pdo->prepare("select {$attr} from {$table} WHERE id = {$id}");

        $statement->execute();

        return $statement->fetch(PDO::FETCH_OBJ);
    }

    public function selectLimitProducts($table, $offset) {
        $statement = $this->pdo->prepare("select * from {$table} LIMIT {$offset}, 5");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function insertProducts($table, $params)
    {
      $sql = sprintf(
          'insert into %s (%s) values (%s)',
          $table,
          implode(', ', array_keys($params)),
          ':' . implode(', :', array_keys($params))
      );

      try {
          $statement = $this->pdo->prepare($sql);

          $statement->execute($params);
      } catch(\Exception $e) {
        die('Oh-oh. Some error occurred');
      }
    }

    public function editProducts($table, $params, $id)
    {
        $i = 1;
        $sql = "update " . $table . " SET ";
        foreach($params as $key => $value) {
            if ($i == count($params)) {
                $sql .= $key . " = '" . $value . "' ";
            }
            else {
                $sql .= $key . " = '" . $value . "', ";
            }    
            $i++;
        }
        $sql .= " WHERE id = {$id}";

        try {
            $statement = $this->pdo->prepare($sql);

            $statement->execute();
        } catch(\Exception $e) {
            die('Oh-oh. Some error occurred');
        }
    }
    
    public function readProducts($table, $id)
    {
      $sql = "SELECT * FROM " . $table . " WHERE id = {$id}";

      $statement = $this->pdo->prepare($sql);
      $statement->execute();

      return $statement->fetch(PDO::FETCH_OBJ);
    }

    public function readLogin($table, $email)
    {
        $sql = "SELECT * FROM " . $table . " WHERE email = '{$email}'";

        $statement = $this->pdo->prepare($sql);
        $statement->execute();
  
        return $statement->fetch(PDO::FETCH_OBJ);
    }

    public function deleteProducts($table, $id)
    {
        $sql = "DELETE FROM " . $table . " WHERE id = {$id}";

        $statement = $this->pdo->prepare($sql);
        $statement->execute();
    }
}
