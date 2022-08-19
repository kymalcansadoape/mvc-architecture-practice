<?php

class Connection{


    public static function make($config){
        try {
            // ! CONNECTION STRING
            return new PDO(
                $config['CONNECTION'].';dbname='.
                $config['DB_NAME'],
                $config['USERNAME'],
                $config['PASSWORD'],
                $config['OPTION']
            );
        }
        catch(PDOException $e){
            die($e->getMessage());
        }
    }
}