<?php
namespace Src\Repository;

use App\Core\Abstracts\AbstractRepository;
use PDO;
use PDOException;
use Src\Entity\Compte;

class CompteRepository extends AbstractRepository{

    private static ?CompteRepository $instance=null;

    private function __construct(){
         parent::__construct();
    }

    public static function getInstance(){
         if(self::$instance === null){
                self::$instance= new self();
         }
         return self::$instance;
    }

    public function FindById($id){
     try{
                    $query= "SELECT * FROM compte WHERE utilisateur_id = :id";
                    $stmt=$this->pdo->prepare($query);
                    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
                    $stmt->execute();
                    $data=$stmt->fetchAll(PDO::FETCH_ASSOC);
                    if($data){
                         $compte= Compte::toObject($data);
                         return $compte;
                    }

                    return null;



         } catch (PDOException $e) {
               error_log("Erreur dans findById: " . $e->getMessage());
               return null;
         }
         
    }

}