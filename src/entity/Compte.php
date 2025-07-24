<?php
namespace Aks\Src\Entity;

use Aks\App\Core\Abstracts\AbstractEntity;
class Compte extends AbstractEntity{
        private int $id;
        private float $solde;
        private string $numero;
        private string $date;
        private  ?TypeCompte $typeCompte;
        private Utilisateur $utilisateur;
        private array $transactions=[];

        public function __construct($id=0, $solde=0, $numero='', $date='', ?TypeCompte $typeCompte=null){
                $this->id=$id;
                $this->solde=$solde;
                $this->numero=$numero;
                $this->date=$date;
                $this->typeCompte=$typeCompte ;
                $this->utilisateur= new Utilisateur();
        }

         public function toArray():array{
                return [
                     "id"=> $this->getId(),
                     "solde"=> $this->getSolde(),
                     "numero"=> $this->getNumero(),
                     "date"=> $this->getDate(),
                     "typeCompte"=> $this->getTypeCompte(),
                     "utilisateur"=> $this->getUtilisateur()->toArray(),
                     "transactions"=> array_map( fn($transaction):?array=> $transaction->toArray(), $this->getTransactions())
                    ];
         }
         public static function toObject(array $data):static{
                 $compte = new static();
                 $compte->setId($data['id'] ?? 0); 
                 $compte->setSolde($data['solde'] ?? 0); 
                 $compte->setNumero($data['numero'] ?? '');
                 $compte->setDate($data['date'] ?? ''); 
                 $compte->setTypeCompte(TypeCompte::from($data['typeCompte'])); 
                // $compte->setTypeCompte($data['typeCompte'] ?? '');
                 $utilisateur=new Utilisateur();
                 $utilisateur->setId($data['utilisateur_id'] ?? 0);
                 $compte->setUtilisateur($utilisateur);

                 return $compte;
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
         * Get the value of solde
         */ 
        public function getSolde()
        {
                return $this->solde;
        }

        /**
         * Set the value of solde
         *
         * @return  self
         */ 
        public function setSolde($solde)
        {
                $this->solde = $solde;

                return $this;
        }

        /**
         * Get the value of numero
         */ 
        public function getNumero()
        {
                return $this->numero;
        }

        /**
         * Set the value of numero
         *
         * @return  self
         */ 
        public function setNumero($numero)
        {
                $this->numero = $numero;

                return $this;
        }

        /**
         * Get the value of utilisateur
         */ 
        public function getUtilisateur():Utilisateur
        {
                return $this->utilisateur;
        }

        /**
         * Set the value of utilisateur
         *
         * @return  self
         */ 
        public function setUtilisateur(Utilisateur $utilisateur)
        {
                $this->utilisateur = $utilisateur;

                return $this;
        }

        /**
         * Get the value of transactions
         */ 
        public function getTransactions()
        {
                return $this->transactions;
        }

        public function addTransaction($transaction):array{
            return $this->transactions[]= $transaction;
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
         * Get the value of typeCompte
         */ 
        public function getTypeCompte(): TypeCompte
        {
                return $this->typeCompte;
        }

        /**
         * Set the value of typeCompte
         *
         * @return  self
         */ 
        public function setTypeCompte(TypeCompte $typeCompte)
        {
                $this->typeCompte = $typeCompte;

                return $this;
        }
}