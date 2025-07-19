<?php
namespace Src\Service;

use App\Core\App;
use Src\Entity\Utilisateur;
use Src\Repository\CompteRepository;

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