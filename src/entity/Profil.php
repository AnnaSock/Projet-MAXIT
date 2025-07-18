<?php
namespace Src\Entity;

use App\Core\Abstracts\AbstractEntity;
class Profil extends AbstractEntity{
        private  int $id;
        private  string $nomProfil;


        public function __construct($id=0,$nomProfil=''){
               $this->id=$id;
               $this->nomProfil=$nomProfil;
        }

         public function toArray():array{
                return [
                       "id" =>$this->getId(),
                       "nomProfil" =>$this->getNomProfil(),
                ];
         }
         public static function toObject(array $data):static{
           $profil = new static();
           $profil->setId($data['id']);
           $profil->setNomProfil($data['nomProfil']);
           return $profil;

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
         * Get the value of nomProfil
         */ 
        public function getNomProfil()
        {
                return $this->nomProfil;
        }

        /**
         * Set the value of nomProfil
         *
         * @return  self
         */ 
        public function setNomProfil($nomProfil)
        {
                $this->nomProfil = $nomProfil;

                return $this;
        }

     

}