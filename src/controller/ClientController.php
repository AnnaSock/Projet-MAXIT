<?php


namespace Src\Controller;

use App\Core\Abstracts\AbstractController;
use App\Core\App;
use Src\Entity\TypeCompte;
use Src\Entity\Utilisateur;
use Src\Service\CompteService ;

use function App\Config\dd;

class ClientController extends AbstractController{
        

         private CompteService $compteService;

         public function __construct(){
               $this->compteService=App::getDependencies('compteService');
               parent::__construct();
         }
         public function index(){
                        $utilisateur=$this->session->get('utilisateur');
                        $user=Utilisateur::toObject($utilisateur);
                        $listCompte=$this->compteService->getCompteByUser($user);
                       
                        $comptePrincipal=array_filter( $listCompte,fn($compte)=>  $compte->getTypeCompte()->value === TypeCompte::PRINCIPAL->value);
                        $comptePrincipal=array_map(fn($compte)=> $compte->toArray(), $comptePrincipal);
                        // dd($comptePrincipal);
                        $compteSecondaire=array_filter( $listCompte,fn($compte)=>  $compte->getTypeCompte()->value === TypeCompte::SECONDAIRE->value);
                        $compteSecondaire=array_map(fn($compte)=> $compte->toArray(), $compteSecondaire);
                        // dd($compteSecondaire);
                        
                        $this->renderHtml('dashboard', [
                                    'principal'=> $comptePrincipal,
                                    'secondaires'=> $compteSecondaire,
                                    'user'=> $user
                        ]);
         }
         public function create(){

         }
         public function show(){

         }
         public function edit(){

         }
         public function destroy(){

         }
         public function store(){

         }
}