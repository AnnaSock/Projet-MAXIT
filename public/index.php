<?php


require_once __DIR__ . "/../vendor/autoload.php";
require_once __DIR__ . "/../routes/route.web.php";
require_once __DIR__ . "/../app/config/boostrap.php";

use App\Core\Database;
use App\Core\Router;

use function App\Config\dd;

ini_set('display_errors', 1);
error_reporting(E_ALL);


Router::resolve();