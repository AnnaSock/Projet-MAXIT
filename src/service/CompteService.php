<?php
namespace Src\Service;
use Src\Repository\CompteRepository;

class CompteService{

    private CompteRepository $compteRepository;
        private static ?CompteService $instance=null;

        private function __construct(){
                $this->compteRepository=CompteRepository::getInstance();
        }


        public static function getInstance(): CompteService|null{
              if(self::$instance === null){
                    self::$instance= new self();
              }
              return self::$instance;
        }


        // public function afficherSolde($id): float|null{
        //             $compte= $this->compteRepository->FindById($id);
        //             if($compte){
        //                 $solde = $compte->getSolde();
        //                 return $solde;
        //             }
        //             return null;
        // }

        public function afficherSolde(int $id): ?float
{
    $compte = $this->compteRepository->findById($id);

    if (!$compte) {
        return null;
    }

    $solde = $compte->getSolde();

    return is_float($solde) ? $solde : null; // sécurité optionnelle
}
}