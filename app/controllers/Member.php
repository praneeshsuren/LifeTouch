<?php
    class Member extends Controller{
        public function __construct(){
            
        }
        public function memberDashboard(){
            $this->view('member/member-dashboard');
        }
        public function memberViewtrainer(){
            $this->view('member/member-viewtrainer');
        }
        public function memberAnnouncements(){
            $this->view('member/member-announcements');
        }
        public function memberSupplements(){
            $this->view('member/member-supplements');} 
    }
?>