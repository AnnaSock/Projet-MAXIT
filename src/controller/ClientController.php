<?php
namespace Aks\Src\Controller;

use Aks\App\Core\Abstracts\AbstractController;
use Aks\Src\Entity\TypeCompte;
use Aks\Src\Entity\Utilisateur;
use Aks\Src\Service\ICompteService;
use Aks\Src\Service\ITransactionService;

use function Aks\App\Config\dd;

class ClientController extends AbstractController{
        

         private ICompteService $compteService;
         private ITransactionService $transactionService;
         

         public function __construct(ICompteService $compteService, ITransactionService $transactionService){
               parent::__construct();
               $this->compteService=$compteService;
               $this->transactionService=$transactionService;
         }
         public function index(){
                        $utilisateur=$this->session->get('utilisateur');
                        $user=Utilisateur::toObject($utilisateur);
                        $listCompte=$this->compteService->getCompteByUser($user);
                        $comptePrincipal=array_filter( $listCompte,fn($compte)=>  $compte->getTypeCompte()->value === TypeCompte::PRINCIPAL->value);
                        $comptePrincipal=array_map(fn($compte)=> $compte->toArray(), $comptePrincipal);
                        // dd($comptePrincipal);
                        $compte_id=$comptePrincipal[0]['id'];
                        $transactions=$this->transactionService->getTransactionByCompte($compte_id);
                        $compteSecondaire=array_filter( $listCompte,fn($compte)=>  $compte->getTypeCompte()->value === TypeCompte::SECONDAIRE->value);
                        $compteSecondaire=array_map(fn($compte)=> $compte->toArray(), $compteSecondaire);
                        // dd($compteSecondaire);
                        $this->renderHtml('dashboard', [
                                    'user'=> $user,
                                    'principal'=> $comptePrincipal,
                                    'secondaires'=> $compteSecondaire,
                                    'transaction' => $transactions
                        ]);
         }
         
         
}