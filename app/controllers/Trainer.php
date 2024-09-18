<?php
    class Trainer extends Controller{

        public function __construct(){
            
        }

        public function dashboard(){
            $this->view('trainer/trainer-dashboard');
        }

        public function announcements(){
            $this->view('trainer/trainer-announcements');
        }

    }
?>