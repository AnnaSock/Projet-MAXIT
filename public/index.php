<?php

use Aks\App\Core\Database;

require_once __DIR__ . "/../vendor/autoload.php";
require_once __DIR__ . "/../app/config/boostrap.php";

use Aks\App\Core\Router;

use function Aks\App\Config\dd as ConfigDd;
use function App\Config\dd;

ini_set('display_errors', 1);
error_reporting(E_ALL);


Router::resolve();

