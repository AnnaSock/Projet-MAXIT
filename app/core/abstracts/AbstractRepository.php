<?php
namespace Aks\App\Core\Abstracts;

use Aks\App\Core\App;
use Aks\App\Core\Singleton;
use PDO;

abstract class AbstractRepository{
        protected PDO $pdo;

        protected string $table;

        protected function __construct(){
            $this->pdo=App::getDependencies('database');
        }

        abstract public function selectAll();
        abstract public function insert($entity);
        abstract public function update($entity);
        abstract public function delete();



}

