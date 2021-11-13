<?php
    namespace app\controllers;

use app\core\Controller;
use app\core\Request;
use app\models\User;

class AuthController extends Controller
{

    public function __construct()
    {
        $this->setLayout('auth');
    }
    
    public function login()
    {
        return $this->view('login');
    }

    public function proccess_login()
    {
        
    }

    public function register(Request $request)
    {

        $registerModel = new User();

        if ($request->isPost()) {

            $registerModel->loadData($request->getBody());

            if ($registerModel->validate() && $registerModel->register()) {
                return 'success';
            }

            // echo '<pre>';
            // var_dump($registerModel->errors);
            // echo '</pre>';
            // exit;

            return $this->view('register', [
                'model' => $registerModel
            ]);
        }
        return $this->view('register', [
            'model' => $registerModel
        ]);
    }
}

?>