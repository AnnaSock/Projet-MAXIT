<?php
namespace App\Core\Abstracts;
abstract class AbstractEntity{
            abstract public function toArray():array;
            abstract public static function toObject(array $data):static;
            public function toJson(){
                return json_encode($this->toArray());
            }
}