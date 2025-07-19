<?php

use Dotenv\Dotenv;

$dotenv= Dotenv::createImmutable(dirname(__DIR__,2));
$dotenv->load();
define('DSN', $_ENV['DSN_POSTGRES']);
define('USER', $_ENV['DB_USER']);
define('PASSWORD', $_ENV['DB_PASS']);
define('NAME', $_ENV['DB_NAME']);
