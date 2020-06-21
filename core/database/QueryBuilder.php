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

    public function read($table, $value) {

        $statement = $this->pdo->prepare("select * from {$table} WHERE id = {$value}");

        $statement->execute();

        return $statement->fetch(PDO::FETCH_OBJ);
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
    public function edit($table,$parameters,$id)
    {
        $sql = "update " . $table . " SET ";
        $i = 1;
        foreach($parameters as $key => $value) {
            if($i == count($parameters)){
                $sql .= $key . " = '" . $value . "' ";
            }
            else{
                $sql .= $key . " = '" . $value . "' , ";
            }
            $i +=1;
        }
        $sql .= "where id = {$id}";
        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute($parameters);
        } catch (\Exception $e) {
            //
        }
    }
   
    public function delete($table, $id)
    {
       $sql = "DELETE FROM " . $table . " WHERE id = :id";
        $qry = $this->pdo->prepare($sql);
        $qry->bindValue(":id", $id);
        $qry->execute();

    }
    public function seledit($table , $id){
        $statement = $this->pdo->prepare("select * from {$table} WHERE id = $id");
        $statement->execute();

        return $statement->fetch(PDO::FETCH_OBJ);
    }

    public function editmodifi($table, $id)
    {
        $statement = $this->pdo->prepare("select * from {$table} WHERE id = $id");

        $statement->execute();

        return $statement->fetch(PDO::FETCH_OBJ);
      
      
    }

    public function pesquisa($table, $pesquisa)
    {
        $statement = $this->pdo->prepare("select * from {$table} WHERE nome LIKE '%{$pesquisa}%'");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);  

         
    }
    public function categoriaspr($table, $id)
    {
        
        $statement = $this->pdo->prepare("select * from {$table} WHERE categoria_id LIKE '%{$id}%'");
        
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }
    public function selectAlfCat($table)
    {
        $statement = $this->pdo->prepare("select * from {$table} ORDER BY nome");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

}


