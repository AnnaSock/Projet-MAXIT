<?php
namespace Aks\Src\Service;

use Aks\Src\Entity\Utilisateur;
use Aks\Src\Repository\IUtilisateurRepository;

class SecurityService implements ISecurityService{

       private IUtilisateurRepository $utilisateurRepository;

       public function __construct(IUtilisateurRepository $utilisateurRepository){
            $this->utilisateurRepository=$utilisateurRepository;
       }

    public function seConnecter($numero, $password):?Utilisateur{

               $utilisateur= $this->utilisateurRepository->findByNumero($numero);
            // password verify
            // php online , password hash
            // paassword by cripte
                if($utilisateur &&  $utilisateur->getMotDePasse() === $password ){
                    return $utilisateur;
                }
                return null;
    }
}