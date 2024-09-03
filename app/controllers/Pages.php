<?php
    class Pages extends Controller{
        public function __construct(){
            // echo 'Pages loaded';
        }

        public function index(){

        }

        public function login(){
            $this->view('login');
        }

        public function dashboard(){
            $this->view('dashboard');
        }

        public function about($name){
            $data = [
                'userName' => $name
            ];

            $this->view('about', $data);
        }
    }
?>