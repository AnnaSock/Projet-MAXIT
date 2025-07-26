<?php
namespace Aks\App\Core\Abstracts;

use Aks\App\Core\Session;

abstract class AbstractController{
    
        private $layout="base";
        protected Session $session;

        public function __construct(){
                $this->session=Session::getInstance();
        }
        abstract public function index();

        public function renderHtml(string $view, array $data=[]){
            extract($data);
            ob_start();
            require_once __DIR__ . "/../../../templates/".$view.".html.php";
            $content= ob_get_clean();
            require_once __DIR__ . "/../../../templates/layout/". $this->layout.".layout.php";
        }


}