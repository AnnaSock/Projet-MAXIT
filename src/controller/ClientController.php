<?php


namespace Aks\Src\Controller;

use Aks\App\Core\Abstracts\AbstractController;
use Aks\App\Core\App;
use Aks\Src\Entity\Compte;
use Aks\Src\Entity\TypeCompte;
use Aks\Src\Entity\Utilisateur;
use Aks\Src\Service\CompteService ;
use Aks\Src\Service\TransactionService;

use function Aks\App\Config\dd;

class ClientController extends AbstractController{
        

         private CompteService $compteService;
         private TransactionService $transactionService;
         

         public function __construct(){
               $this->compteService=App::getDependencies('compteService');
               $this->transactionService=App::getDependencies('transactionService');
               parent::__construct();
         }
         public function index(){
                        $utilisateur=$this->session->get('utilisateur');
                        $user=Utilisateur::toObject($utilisateur);
                        $listCompte=$this->compteService->getCompteByUser($user);
                        
                        
                        
                        $comptePrincipal=array_filter( $listCompte,fn($compte)=>  $compte->getTypeCompte()->value === TypeCompte::PRINCIPAL->value);
                        $comptePrincipal=array_map(fn($compte)=> $compte->toArray(), $comptePrincipal);
                        $compte_id=$comptePrincipal[0]['id'];
                        $transactions=$this->transactionService->getTransactionByCompte($compte_id);
                        // dd($transactions);
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
         public function create(){

         }
      //    public function showTransactions() {
      //             $comptePrincipalId = $this->session->get('comptePrincipal')['id'] ;
      //             $transactions = CompteRepository::getInstance()->getTransactionsByCompte($comptePrincipalId);
      //             $this->session->set('transactions', $transactions);
      //             $this->renderHtml('client/transactions', [
      //                   'transactions' => $transactions
      //             ]);
      //    }
         public function edit(){

         }

          public function show(){

         }
         public function destroy(){

         }
         public function store(){

         }
}