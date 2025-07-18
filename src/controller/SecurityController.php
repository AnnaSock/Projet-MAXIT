<?php
namespace Src\Controller;

use App\Core\Abstracts\AbstractController;
use App\Core\App;
use App\Core\Session;
use App\Core\Validator;
use Src\Service\SecurityService;

use function App\Config\dd;

class SecurityController extends AbstractController{

        private SecurityService $securityService;

        public function __construct(){
            parent::__construct();
            $this->securityService=App::getDependencies("securityService");
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

       
        public function show(){
            
        }
        public function edit(){
            
        }
        public function destroy(){
            
        }
        public function store(){
            
        }


}