<?php
namespace Src\Repository;

use App\Core\Abstracts\AbstractRepository;
use \PDO;
use App\Core\Database;
use Src\Entity\Utilisateur;

use function App\Config\dd;

class UtilisateurRepository extends AbstractRepository{

        private static ?UtilisateurRepository $instance=null;


        private function __construct(){
            parent::__construct();
        }

        
       public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
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