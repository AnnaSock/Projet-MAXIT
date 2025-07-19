<?php
namespace Src\Repository;

use App\Core\Abstracts\AbstractRepository;
use PDO;
use PDOException;
use Src\Entity\Compte;
use Src\Entity\Utilisateur;

use function App\Config\dd;

class CompteRepository extends AbstractRepository{

     
    private static ?CompteRepository $instance=null;

    private function __construct(){
         parent::__construct();
         $this->table='compte';
    }

    public static function getInstance(){
         if(self::$instance === null){
                self::$instance= new self();
         }
         return self::$instance;
    }

    public function selectAll(){

    }
        public function insert($entity){

        }
        public function update($entity){

        }
        public function delete(){

        }

    public function FindByUser(Utilisateur $utilisateur){
                    $query= "SELECT * FROM " . $this->table. " WHERE utilisateur_id = :utilisateur_id";
                    $stmt=$this->pdo->prepare($query);
                    // $stmt->bindParam(':id', $id, PDO::PARAM_INT);
                    $stmt->execute([
                              'utilisateur_id' => $utilisateur->getId()
                    ]);

                    $data=$stmt->fetchAll(PDO::FETCH_ASSOC);
                   
                    return array_map(fn($c)=>Compte::toObject($c), $data);

 }

}