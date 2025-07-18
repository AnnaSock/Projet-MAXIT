<?php
namespace Src\Entity;

class Transaction{
        private int $id;
        private float $montant;
        private string $date;
        private  ?TypeTransaction $typeTransaction=null;
        private Compte $compte;

        public function __construct($id=0, $montant=0,$date=''){
            $this->id=$id;
            $this->montant=$montant;
            $this->date=$date;
            $this->compte= new Compte();
        }


        public function toArray():array{
                return [
                     "id"=> $this->getId(),
                     "montant"=> $this->getMontant(),
                     "date"=> $this->getDate(),
                     "typeTransaction"=> $this->getTypeTransaction(),
                     "compte"=> $this->getCompte()->toArray(),
                    ];
         }
         public static function toObject(array $data):static{
                 $transaction = new static();
                 $transaction->setId($data['id']); 
                 $transaction->setMontant($data['solde']); 
                 $transaction->setDate($data['date']); 
                 $transaction->setTypeTransaction(TypeTransaction::from($data['typeTransaction'])); 
                 $compte=new Compte();
                 $compte->setId($data['compte_id']);
                 $transaction->setCompte($compte);

                 return $transaction;
         }



        /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */ 
        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }

        /**
         * Get the value of montant
         */ 
        public function getMontant()
        {
                return $this->montant;
        }

        /**
         * Set the value of montant
         *
         * @return  self
         */ 
        public function setMontant($montant)
        {
                $this->montant = $montant;

                return $this;
        }

        /**
         * Get the value of date
         */ 
        public function getDate()
        {
                return $this->date;
        }

        /**
         * Set the value of date
         *
         * @return  self
         */ 
        public function setDate($date)
        {
                $this->date = $date;

                return $this;
        }

        /**
         * Get the value of typeTransaction
         */ 
        public function getTypeTransaction():TypeTransaction
        {
                return $this->typeTransaction;
        }

        /**
         * Set the value of typeTransaction
         *
         * @return  self
         */ 
        public function setTypeTransaction(TypeTransaction $typeTransaction)
        {
                $this->typeTransaction = $typeTransaction;

                return $this;
        }

        /**
         * Get the value of compte
         */ 
        public function getCompte():Compte
        {
                return $this->compte;
        }

        /**
         * Set the value of compte
         *
         * @return  self
         */ 
        public function setCompte(Compte $compte)
        {
                $this->compte = $compte;

                return $this;
        }
}