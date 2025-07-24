<?php
namespace Aks\Src\Entity;
use Aks\App\Core\Abstracts\AbstractEntity;
use Aks\Src\Entity\Profil;


class Utilisateur extends AbstractEntity{
        private int $id;
        private string $nom;
        private string $prenom;
        private string $adresse;
        private string $motDePasse;
        private int $numeroCni;
        private string $photoRecto;
        private string $photoVerso;
        private string $numero;
        private Profil $profil;
        private array $comptes=[];

        public function __construct($id=0, $nom='', $prenom='',$adresse='',$motDePasse='',$numeroCni=0,$photoRecto='',$photoVerso='',$numero=''){
                $this->id=$id;
                $this->nom=$nom;
                $this->prenom=$prenom;
                $this->adresse=$adresse;
                $this->motDePasse=$motDePasse;
                $this->numeroCni=$numeroCni;
                $this->photoRecto=$photoRecto;
                $this->photoVerso=$photoVerso;
                $this->numero=$numero;
                $this->profil= new Profil();
        }


         public function toArray():array{
                return [
                     "id"=> $this->getId(),
                     "nom"=> $this->getNom(),
                     "prenom"=> $this->getPrenom(),
                     "adresse"=> $this->getAdresse(),
                     "motDePasse"=> $this->getMotDePasse(),
                     "numeroCni"=> $this->getNumeroCni(),
                     "photoRecto"=> $this->getPhotoRecto(),
                     "photoVerso"=> $this->getPhotoVerso(),
                     "numero"=> $this->getNumero(),
                     "profil"=> $this->getProfil()->toArray(),
                     "comptes"=> array_map( fn($compte):?array=> $compte->toArray(), $this->getComptes())
                    ];
         }
         public static function toObject(array $data):static{
                 $utilisateur = new static();
                 $utilisateur->setId($data['id'] ?? 0); 
                 $utilisateur->setNom($data['nom'] ?? ''); 
                 $utilisateur->setPrenom($data['prenom'] ?? ''); 
                 $utilisateur->setAdresse($data['adresse'] ?? ''); 
                 $utilisateur->setMotDePasse($data['motDePasse'] ?? ''); 
                 $utilisateur->setNumeroCni($data['numeroCni'] ?? 0);
                 $utilisateur->setPhotoRecto($data['photoRecto'] ?? '');
                 $utilisateur->setPhotoVerso($data['photoVerso'] ?? ''); 
                 $utilisateur->setNumero($data['numero'] ?? 0);
                 $profil=new Profil();
                 $profil->setId($data['profil_id'] ?? 0);
                 $utilisateur->setProfil($profil);

                 return $utilisateur;
         }

        /**
         * Get the value of PresetPrenom
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
         * Get the value of nom
         */ 
        public function getNom()
        {
                return $this->nom;
        }

        /**
         * Set the value of nom
         *
         * @return  self
         */ 
        public function setNom($nom)
        {
                $this->nom = $nom;

                return $this;
        }

                /**
                 * Get the value of prenom
                 */ 
                public function getPrenom()
                {
                                return $this->prenom;
                }

                /**
                 * Set the value of prenom
                 *
                 * @return  self
                 */ 
                public function setPrenom($prenom)
                {
                                $this->prenom = $prenom;

                                return $this;
                }

        /**
         * Get the value of adresse
         */ 
        public function getAdresse()
        {
                return $this->adresse;
        }

        /**
         * Set the value of adresse
         *
         * @return  self
         */ 
        public function setAdresse($adresse)
        {
                $this->adresse = $adresse;

                return $this;
        }

        /**
         * Get the value of motDePasse
         */ 
        public function getMotDePasse()
        {
                return $this->motDePasse;
        }

        /**
         * Set the value of motDePasse
         *
         * @return  self
         */ 
        public function setMotDePasse($motDePasse)
        {
                $this->motDePasse = $motDePasse;

                return $this;
        }

        /**
         * Get the value of numeroCni
         */ 
        public function getNumeroCni()
        {
                return $this->numeroCni;
        }

        /**
         * Set the value of numeroCni
         *
         * @return  self
         */ 
        public function setNumeroCni($numeroCni)
        {
                $this->numeroCni = $numeroCni;

                return $this;
        }

        /**
         * Get the value of photoRecto
         */ 
        public function getPhotoRecto()
        {
                return $this->photoRecto;
        }

        /**
         * Set the value of photoRecto
         *
         * @return  self
         */ 
        public function setPhotoRecto($photoRecto)
        {
                $this->photoRecto = $photoRecto;

                return $this;
        }

        /**
         * Get the value of photoVerso
         */ 
        public function getPhotoVerso()
        {
                return $this->photoVerso;
        }

        /**
         * Set the value of photoVerso
         *
         * @return  self
         */ 
        public function setPhotoVerso($photoVerso)
        {
                $this->photoVerso = $photoVerso;

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
         * Get the value of profil
         */ 
        public function getProfil()
        {
                return $this->profil;
        }

        /**
         * Set the value of profil
         *
         * @return  self
         */ 
        public function setProfil($profil)
        {
                $this->profil = $profil;

                return $this;
        }

        /**
         * Get the value of comptes
         */ 
        public function getComptes()
        {
                return $this->comptes;
        }

        public function addComptes($compte):array{
            return $this->comptes[]=$compte;
        }
}