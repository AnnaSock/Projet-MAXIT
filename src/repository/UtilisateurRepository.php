<?php
namespace Aks\Src\Repository;

use Aks\App\Core\Abstracts\AbstractRepository;
use \PDO;
use Aks\Src\Entity\Utilisateur;
use Aks\App\Core\Database;

class UtilisateurRepository extends AbstractRepository implements IUtilisateurRepository{

        // private static ?UtilisateurRepository $instance=null;


        public function __construct()
        {
           parent::__construct();
        }

        
      

      public function findByNumero($numero):?Utilisateur{
        $query= "SELECT * FROM utilisateurs WHERE numero = :numero";
        $stmt= $this->pdo->prepare($query);
        $stmt->bindParam(':numero',$numero);
        $stmt->execute();
        $data= $stmt->fetch(PDO::FETCH_ASSOC);
        
        if($data){
                $objectUtilisateur= Utilisateur::toObject($data);
                return $objectUtilisateur;
        }
        
           return null;
      }

       
}