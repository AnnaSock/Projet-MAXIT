<?php

namespace Aks\Src\Service;

use Aks\Src\Repository\ITransactionRepository;

class TransactionService implements ITransactionService{

        private  ITransactionRepository $transactionRepository;


        public function __construct(ITransactionRepository $transactionRepository){
              $this->transactionRepository=$transactionRepository;
        }

    public function getTransactionByCompte($compte_id){
        return $this->transactionRepository->findByCompte($compte_id);
    }


}