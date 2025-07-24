<?php

use Aks\App\Core\ErrorController;
use App\Core\Middlewares\Auth;
use Aks\Src\Controller\ClientController;
use Aks\Src\Controller\SecurityController;



$routes=[
       "/"=> [
                    "controller"=> SecurityController::class,
                    "action"=> "index",
       ],

       "/login"=> [
                    "controller"=> SecurityController::class,
                    "action"=>"login",
       ],

       "/logout"=>[
                    "controller"=> SecurityController::class,
                    "action"=>"logout"
       ],

       "/account/create"=>[
                    "controller"=>SecurityController::class,
                    "action"=>'create'
       ],

       "/account/save"=>[
                    "controller"=>SecurityController::class,
                    "action"=>'store'
       ],

       "/error/404"=>[
                    "controller"=>ErrorController::class,
                    "action"=>"notFound"
       ],

       "/client/dashbord"=>[
                    "controller"=>ClientController::class,
                    "middlewares"=>["auth"],
                    "action"=>"index"
       ],


];


return $routes;