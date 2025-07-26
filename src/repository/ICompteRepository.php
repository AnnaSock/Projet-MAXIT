<?php
namespace Aks\Src\Repository;
use Aks\Src\Entity\Utilisateur;

interface ICompteRepository{

    public function FindByUser(Utilisateur $utilisateur);
}


