<?php


namespace Src\Controller;

use App\Core\Abstracts\AbstractController;
use App\Core\App;
use Src\Entity\Compte;
use Src\Service\CompteService ;
use Symfony\Component\Yaml\Yaml;

use function App\Config\dd;

class ClientController extends AbstractController{
        

         private CompteService $compteService;

         public function __construct(){
               parent::__construct();
               $this->compteService= CompteService::getInstance();
         }
         public function index(){
            
                        $utilisateur= $this->session->get('utilisateur');
                        $id=$utilisateur['id'];
                        $solde=$this->compteService->afficherSolde($id);
                        dd($solde);
                        $this->renderHtml('dashboard');
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