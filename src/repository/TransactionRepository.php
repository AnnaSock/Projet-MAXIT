<?php
namespace Aks\Src\Repository;
use Aks\App\Core\Abstracts\AbstractRepository;
use PDO;

class TransactionRepository extends AbstractRepository{

    private static ?TransactionRepository $instance=null;

    public static function getInstance(){
         if(self::$instance === null){
                self::$instance= new self();
         }
         return self::$instance;
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


   public function selectAll(){

   }
       public function insert($entity){

       }
       public function update($entity){

       }
       public function delete(){

       }

}