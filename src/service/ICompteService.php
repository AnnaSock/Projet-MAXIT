<?php
namespace Aks\Src\Service;

use Aks\Src\Entity\Utilisateur;

interface ICompteService
{
        public function getCompteByUser(Utilisateur $user);
}