<?php
namespace Aks\Src\Service;

use Aks\App\Core\App;
use Aks\Src\Entity\Utilisateur;
use Aks\Src\Repository\CompteRepository;

class CompteService{

        private CompteRepository $compteRepository;
        private static ?CompteService $instance=null;

        private function __construct(){
                $this->compteRepository=App::getDependencies('compteRepository');
        }


        public static function getInstance(): CompteService|null{
              if(self::$instance === null){
                    self::$instance= new self();
              }
              return self::$instance;
        }
        public function getCompteByUser(Utilisateur $user)
{
        return $this->compteRepository->FindByUser($user);

}
}