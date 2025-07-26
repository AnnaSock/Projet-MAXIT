<?php
namespace Aks\Src\Repository;
use Aks\Src\Entity\Utilisateur;

interface IUtilisateurRepository{

    public function findByNumero($numero):?Utilisateur;
}