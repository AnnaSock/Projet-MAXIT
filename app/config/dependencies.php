<?php

use Aks\App\Core\Database;
use Aks\App\Core\Session;
use Aks\Src\Repository\CompteRepository;
use Aks\Src\Repository\UtilisateurRepository;
use Aks\Src\Service\SecurityService;

$dependencies=[
            "core"=>[
                    "database"=> Database::class,
                    "session"=> Session::class

            ],
            "repository"=>[
                    "utilisateurRepository"=> UtilisateurRepository::class,
                    "compteRepository"=> CompteRepository::class

            ],
            "service"=>[
                     "securityService"=> SecurityService::class
            ]
];


return $dependencies;