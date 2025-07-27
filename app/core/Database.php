<?php
namespace Aks\App\Core;
use \PDO;

class Database{
        private static ?PDO $pdo=null;

        private function __construct(){

        }

        

        public static function getInstance(){
                if(self::$pdo===null){
                     self::$pdo= new PDO(DSN_RAILWAY, DB_USER_RAILWAY,DB_PASS_RAILWAY);
                     self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                }
                return self::$pdo;
        }
}