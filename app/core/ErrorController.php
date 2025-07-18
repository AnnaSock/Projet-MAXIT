<?php
namespace App\Core;
class ErrorController{
    public function notFound(){
        require_once __DIR__ ."/../error/404.html.php";
    }
}