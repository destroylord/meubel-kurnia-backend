<?php
    namespace app\controllers;

    use app\core\Application;
    use app\core\Controller;
    

class SiteController extends Controller{

        public function welcome()
        {
            $params = [
                'name' => "WTF"
            ];

            return $this->view('welcome',$params);
        }

        public function contact()
        {
            return $this->view('contact');
        }

        public function handlerContact()
        {
            return 'Handling Submited data';
        }
    }
?>