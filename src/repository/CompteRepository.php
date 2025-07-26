<?php
namespace Aks\Src\Repository;

use Aks\App\Core\Abstracts\AbstractRepository;
use Aks\App\Core\Database;
use PDO;
use PDOException;
use Aks\Src\Entity\Compte;
use Aks\Src\Entity\Utilisateur;

use function App\Config\dd;

class CompteRepository extends AbstractRepository implements ICompteRepository{

    public function __construct()
    {
          parent::__construct();
         $this->table='compte';
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