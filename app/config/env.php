<?php

use Dotenv\Dotenv;

$dotenv= Dotenv::createImmutable(dirname(__DIR__,2));
$dotenv->load();

define('DSN_MYSQL', $_ENV['DSN_MYSQL']);
define('DB_USER_MYSQL', $_ENV['DB_USER_MYSQL']);
define('DB_PASS_MYSQL', $_ENV['DB_PASS_MYSQL']);
define('BASE_DSN_MYSQL', $_ENV['BASE_DSN_MYSQL']);


define('DB_NAME', $_ENV['DB_NAME']);
define('DB_DRIVER', $_ENV['DB_DRIVER']);
define('API_URL', $_ENV['API_URL']);

define('DSN_POSTGRES', $_ENV['DSN_POSTGRES']);
define('DB_USER_POSTGRES', $_ENV['DB_USER_POSTGRES']);
define('DB_PASS_POSTGRES', $_ENV['DB_PASS_POSTGRES']);
define('BASE_DSN_POSTGRES', $_ENV['BASE_DSN_POSTGRES']);

define('DSN_RAILWAY', $_ENV['DSN_RAILWAYY']);
define('DB_USER_RAILWAY', $_ENV['DB_USER_RAILWAY']);
define('DB_PASS_RAILWAY', $_ENV['DB_PASS_RAILWAY']);
define('BASE_DSN_RAILWAY', $_ENV['BASE_DSN_RAILWAY']);
