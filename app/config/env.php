<?php

use Dotenv\Dotenv;

$dotenv= Dotenv::createImmutable(dirname(__DIR__,2));
$dotenv->load();
define('DSN', $_ENV['dsn']);
define('USER', $_ENV['DB_USER']);
define('PASSWORD', $_ENV['DB_PASS']);