<?php
class QueryBuilder
{
    protected $pdo;
    public function __construct($pdo){
        $this->pdo = $pdo;
    }

    public function selectAll($table){
        $statement = $this->pdo->prepare("select * from $table");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }

    public function insert($data, $table){
        $getDataKeys = array_keys($data);
        $getDataValues = array_values($data);
        $cols = implode(",", $getDataKeys);
        $questionMark = "";
        foreach($getDataKeys as $key){
            $questionMark.="?,";
        }
        $questionMark = rtrim($questionMark, ",");

        $sql = "insert into $table ($cols) values ($questionMark)";
        $statement = $this->pdo->prepare($sql);
        $statement->execute($getDataValues);
    }

    public function update(){

    }

    public function delete(){
        
    }
}