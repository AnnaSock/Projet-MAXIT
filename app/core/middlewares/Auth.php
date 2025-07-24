<?php
namespace Aks\App\Core\Middlewares;

use Aks\App\Core\Session;

use function App\Config\dd;

class Auth{

    private Session $session;
    public function __invoke(){
        $this->session=Session::getInstance();
        // dd($_SESSION);
        if(!$this->session->isset('utilisateur')){
            header('Location: /');
            exit;
        }

    }
}

