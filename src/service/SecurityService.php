<?php
namespace Aks\Src\Service;

use Aks\App\Core\App;
use Aks\Src\Entity\Utilisateur;
use Aks\Src\Repository\UtilisateurRepository;

class SecurityService{
       private static ?SecurityService $instance=null;

       private UtilisateurRepository $utilisateurRepository;

       private function __construct(){
            $this->utilisateurRepository=App::getDependencies('utilisateurRepository');
       }

       public static function getInstance(): SecurityService|null {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
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