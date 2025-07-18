<?php

use App\Core\ErrorController;
use App\Core\Middlewares\Auth;
use Src\Controller\ClientController;
use Src\Controller\SecurityController;



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