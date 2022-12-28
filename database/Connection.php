<?php

class Connection
{
    public static function make($config){
        try{
            return $pdo = new PDO(
                "{$config['host']}; dbname = {$config['dbName']}",
                $config['username'],
                $config['password']
            );
        }catch(PDOException $err){
            echo $err->getMessage();
        }
    }
}