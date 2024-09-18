<?php
    class Pages extends Controller{
        private $pagesModel;
    
        public function __construct(){
            $this->pagesModel = $this->model('M_Pages');
        }

        public function login(){
            $this->view('login');
        }
        

        public function test(){
            $users = $this->pagesModel->getPages();

            $data = [
                'users' => $users
            ];

            $this->view('test', $data);
        }
    }
?>