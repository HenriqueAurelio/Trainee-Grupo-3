<?php


class QueryBuilder

{
    protected $pdo;
    
    
    public function __construct($pdo)
    
    {

        $this->pdo = $pdo;
    
    }


    public function selectAll($table){
    
        $statement = $this->pdo->prepare ("select * from {$table}");

        $statement->execute();
    
        return $statement->fetchAll(PDO::FETCH_CLASS);

    }

    public function insert($table, $parameters)
    {

        $sql = sprintf(

            'insert into %s (%s) values (%s)',
            $table, 
            implode(', ', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters)),
        );

        try{

            $statement = $this->pdo->prepare($sql);

            $statement->execute($parameters);


        } catch (Exception $e){

            echo $e;
        }

    }

    public function selectCategory($category, $table, $value) {

        $statement = $this->pdo->prepare("select {$category} from {$table} WHERE id = {$value}");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);

    }

    public function selectOne($table, $value) {

        $statement = $this->pdo->prepare("select * from {$table} WHERE id = {$value}");

        //die(var_dump($statement));

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_OBJ);

    }

    public function delete($table, $id)

    {
        
        $sql = "DELETE FROM " . $table . " WHERE id = :id";

        $qry = $this->pdo->prepare($sql);
        $qry->bindValue(":id", $id);
        $qry->execute();

    }

    public function update($table, $column, $id)

    {

        $sql = "UPDATE " . $table . " SET ";
        
        $counter = 1;
        foreach($column as $col => $value){
            if($counter == count($column)){
                $sql .= $col . " = '" . $value . "' ";
            }else if($counter < count($column)){
                $sql .= $col . " = '" . $value . "', ";
            }
            $counter ++;
        }

        $sql .= " WHERE id = {$id}";

        //die(var_dump($sql));

        $statement = $this->pdo->prepare($sql);

        $statement->execute();


    }

    public function read()
    
    {

        
    }

}