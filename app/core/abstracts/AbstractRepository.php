<?php
namespace Aks\App\Core\Abstracts;

use Aks\App\Core\Database;
use Aks\App\Core\Singleton;
use PDO;

abstract class AbstractRepository extends Singleton{
        protected PDO $pdo;

        protected string $table;

        protected function __construct(){
            $this->pdo= Database::getInstance();
        }

}

