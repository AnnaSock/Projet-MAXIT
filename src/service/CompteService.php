<?php
namespace Aks\Src\Service;

use Aks\Src\Entity\Utilisateur;
use Aks\Src\Repository\ICompteRepository;

class CompteService implements ICompteService{

        private ICompteRepository $compteRepository;

        public function __construct(ICompteRepository $compteRepository)
        {
                $this->compteRepository=$compteRepository;
        }


        
        public function getCompteByUser(Utilisateur $user)
{
        return $this->compteRepository->FindByUser($user);

}
}