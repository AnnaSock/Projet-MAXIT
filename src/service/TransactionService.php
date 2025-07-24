<?php

namespace Aks\Src\Service;

use Aks\App\Core\App;
use Aks\Src\Repository\TransactionRepository;

class TransactionService {

        private static  ?TransactionService $instance=null;
        private TransactionRepository $transactionRepository;


        private function __construct(){
              $this->transactionRepository=App::getDependencies('transactionRepository');
        }

        public static function getInstance(){
         if(self::$instance === null){
                self::$instance= new self();
         }
         return self::$instance;
        }

    public function getTransactionByCompte($compte_id){
        return $this->transactionRepository->findByCompte($compte_id);
    }


}