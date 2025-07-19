<?php

namespace Migrations;

use Exception;
use \PDO;

class Migration{
    
        
    private PDO $pdo;
    private string $driver;

    public function __construct(PDO $pdo){

        $this->pdo=$pdo;
        $this->driver=$pdo->getAttribute(PDO::ATTR_DRIVER_NAME);

    }


    public function run(){
                $this->createDatabase();
                $this->creataTables();
    }


    private function createDatabase(){
                if($this->driver=== "mysql"){
                    $this->pdo->exec("CREATE DATABASE IF NOT EXISTS " . DB_NAME);
                    $this->pdo->exec("USE " . DB_NAME);
                }
    }


    private function creataTables(){
         $sql=match($this->driver){
            'mysql'=>file_get_contents(__DIR__ . '/../databases/script_create_mysql.sql'),
            'pgsql'=>file_get_contents(__DIR__ . '/../databases/script_create_postgres.sql'),
            default => throw new Exception('driver non supporté ' .$this->driver)
         };

         $this->pdo->exec($sql);
    }


    // on peut aussi avoir create sequence, index ou vues

}



