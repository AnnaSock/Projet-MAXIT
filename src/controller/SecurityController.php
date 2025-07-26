<?php
namespace Aks\Src\Controller;

use Aks\App\Core\Abstracts\AbstractController;
use Aks\App\Core\App;
use App\Core\Session;
use Aks\App\Core\Validator;
use Aks\Src\Service\ISecurityService;
use Aks\Src\Service\SecurityService;

use function App\Config\dd;

class SecurityController extends AbstractController{

        private ISecurityService $securityService;

        public function __construct(ISecurityService $securityService){
            parent::__construct();
            $this->securityService=$securityService;
        }
        public function index(){
            $this->renderHtml('connexion');
        }
        public function create(){
             $this->renderHtml('creerCompte');
        }
        public function logout(){
                if($_SERVER['REQUEST_METHOD'] === "POST"){
                        $this->session->destroy();
                        header('Location: /');
                        exit;
                }
                header('Location: /client/dashbord');
                exit;
        }
        public function login(){
            if($_SERVER['REQUEST_METHOD'] === 'POST'){
                    // validation a faire
                    // on peut le faire dans le middleware qui est une fonction qui s'execute
                    $post=[
                        'numero'=>trim($_POST['numero'] ?? ''),
                        'mdp'=>trim($_POST['mdp'] ?? '')
                    ];
                    // dd($post);
                    Validator::validate($post, [
                                        'numero'=> ['senegal_phone', 'required' ],
                                         'mdp'=> ['required']
                    ]);
                    if(Validator::isValid()){
                        extract($post);
                        $utilisateur=$this->securityService-> seConnecter($numero ,$mdp);
                         if($utilisateur){
                             $this->session->set('utilisateur', $utilisateur->toArray());
                            //  dd($this->session->get('utilisateur'));
                                    header('Location: /client/dashbord');
                                    exit;
                         }else{
                                    Validator::addError('globalError', "le numero ou mot de passe est incorrect");
                                    $this->session->set('errors', Validator::getErrors());

                                    header('Location: /');
                                    exit;
                                }
                                
                        }
                    $this->session->set('errors', Validator::getErrors());
                    header('Location: /');
                    exit;
                }
                $this->renderHtml('connexion');
        }

       
       
        public function store(){

            $this->renderHtml('succes');
            
        }


}