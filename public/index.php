<?php

require_once __DIR__ . "/../vendor/autoload.php";
require_once __DIR__ . "/../app/config/boostrap.php";

use Aks\App\Core\Router;
use Aks\App\Core\App;


ini_set('display_errors', 1);
error_reporting(E_ALL);

App::init();

Router::resolve();

