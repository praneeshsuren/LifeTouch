<?php
    class Pages extends Controller{
        private $pagesModel;
    
        public function __construct(){
            $this->pagesModel = $this->model('M_Pages');
        }

        public function index(){

        }

        public function login(){
            $this->view('login');
        }

        public function dashboard(){
            $this->view('dashboard');
        }

        public function manager(){
            $this->view('manager/manager_dashboard');
        }
        public function announcement(){
            $this->view('manager/announcement');
        }
        public function announcement_main(){
            $this->view('manager/announcement_main');
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