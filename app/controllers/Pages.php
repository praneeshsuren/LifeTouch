<?php
    class Pages extends Controller{
        public function __construct(){
            // echo 'Pages loaded';
        }

        public function login($name){
            $this->view('login');
        }
    }
?>