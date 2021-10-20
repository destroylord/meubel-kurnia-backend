<?php
    namespace app\controllers;

use app\core\Controller;
use app\core\Request;

class AuthController extends Controller
{
    
    public function login()
    {
        $this->setLayout('auth');
        return $this->view('login');
    }

    public function proccess_login()
    {
        
    }

    public function register(Request $request)
    {
        if ($request->isPost()) {
            return "Handle submitted data";
        }
        $this->setLayout('auth');
        return $this->view('register');
    }
}

?>