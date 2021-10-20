<?php
    namespace app\controllers;

    use app\core\Application;
    use app\core\Controller;
    use app\core\Request;

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

        public function handlerContact(Request $request)
        {

            var_dump($request->getBody());
            // var_dump($_POST);
            return 'Handling Submited data';
        }
    }
?>