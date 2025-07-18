<?php
namespace App\Core\Abstracts;

use App\Core\Database;
use App\Core\App;
use PDO;

class AbstractRepository{
        protected PDO $pdo;

        protected function __construct(){
            $this->pdo=App::getDependencies('database');
        }
}

