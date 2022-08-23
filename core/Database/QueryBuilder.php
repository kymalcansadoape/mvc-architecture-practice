<?php 
class QueryBuilder{
    protected $pdo;

    function __construct(PDO $pdo){
        $this->pdo = $pdo;
    }

    function selectAll($tableName){
        $statement = $this->pdo->prepare("SELECT * FROM {$tableName}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }
    public function insert($table, $param){

        // die(var_dump($param));
        $sql = sprintf(
            'insert into %s (%s) values (%s)', 
            $table, 
            implode(', ', array_keys($param)), 
            ':'. implode(', :', array_keys($param))
        );

        try{
            $statement = $this->pdo->prepare($sql);
            $statement->execute($param);
        }
        catch(Exception $e){
            die('sometime went wrong');
        }

    }

}