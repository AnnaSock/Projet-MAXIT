<?php
namespace Aks\Src\Repository;
use Aks\App\Core\Abstracts\AbstractRepository;
use Aks\App\Core\Database;
use PDO;

class TransactionRepository extends AbstractRepository implements ITransactionRepository{


   public function __construct()
   {
        parent::__construct();
   }
    
    public function findByCompte($compte_id)
    {
        $sql = "SELECT *
                FROM transaction 
                WHERE compte_id = :compte_id
                ORDER BY date DESC
                LIMIT 10";
        
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':compte_id', $compte_id, PDO::PARAM_INT);
        $stmt->execute();
        $transactions=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $transactions;
    }


   

}