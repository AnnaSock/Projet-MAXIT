<?php

use Dotenv\Dotenv;
if(file_exists(__DIR__. '/../../.env')){
     $dotenv= Dotenv::createImmutable((__DIR__. '/../../'));
    $dotenv->load();
}



define('DB_NAME', $_ENV['DB_NAME']);
define('DB_DRIVER', $_ENV['DB_DRIVER']);
define('API_URL', $_ENV['API_URL']);
define('APP_ENV', $_ENV['APP_ENV']);

if(APP_ENV==="dev"){
    if (DB_DRIVER==='mysql') {
        define('DSN_MYSQL', $_ENV['DSN_MYSQL']);
        define('DB_USER_MYSQL', $_ENV['DB_USER_MYSQL']);
        define('DB_PASS_MYSQL', $_ENV['DB_PASS_MYSQL']);
        define('BASE_DSN_MYSQL', $_ENV['BASE_DSN_MYSQL']);
    }elseif (DB_DRIVER==='pgsql') {
        define('DSN_POSTGRES', $_ENV['DSN_POSTGRES']);
        define('DB_USER_POSTGRES', $_ENV['DB_USER_POSTGRES']);
        define('DB_PASS_POSTGRES', $_ENV['DB_PASS_POSTGRES']);
        define('BASE_DSN_POSTGRES', $_ENV['BASE_DSN_POSTGRES']);
    }
}elseif (APP_ENV==="prod") {
    define('DSN_RAILWAY', $_ENV['DSN_RAILWAY']);
    define('DB_USER_RAILWAY', $_ENV['DB_USER_RAILWAY']);
    define('DB_PASS_RAILWAY', $_ENV['DB_PASS_RAILWAY']);
    define('BASE_DSN_RAILWAY', $_ENV['BASE_DSN_RAILWAY']);
}



