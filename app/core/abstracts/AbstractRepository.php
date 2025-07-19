<?php
namespace App\Core\Abstracts;

use App\Core\App;
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

