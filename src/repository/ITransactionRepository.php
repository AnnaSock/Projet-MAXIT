<?php
namespace Aks\Src\Repository;

interface ITransactionRepository{

    public function findByCompte($compte_id);
}