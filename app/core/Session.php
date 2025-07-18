<?php
namespace App\Core;

class Session{
    private static ?Session $session = null; 

    private function __construct()
    {
        // pour verifier si la session est allumé
        if(session_status()===PHP_SESSION_NONE){   
            session_start();
        }
    }

     public static function getInstance():Session
     {
        if(self::$session===null){
            self::$session = new Session();
        }
        return self::$session;

    }

    public  function set(string $key, mixed $data){
        $_SESSION[$key] = $data;
    }

    public  function get($key){
       return $_SESSION[$key] ?? null;
    }

    public  function unset($key){
        unset($_SESSION[$key]);
    }

    public  function isset($key){
        return isset($_SESSION[$key]);

    }

    public  function destroy(){
        if(session_status()===PHP_SESSION_ACTIVE){
            session_unset();
            session_destroy();
            self::$session = null;
        }

    }

    
}