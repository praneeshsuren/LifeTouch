<?php 
    class Controller{
        // To load the model
        public function model($model){
            // Require the model file
            require_once '../app/models/' . $model . '.php';

            // Instantiate the model and pass it to the controller member variable
            return new $model();
        }

        // To load the view
        public function view($view, $data = []){
            // Check whether the view file exists
            if(file_exists('../app/views/pages/'.$view.'.php')){
                // Require the view file
                require_once '../app/views/pages/'.$view.'.php';
            } 
            else {
                // If the view file does not exist
                die('Corresponding view does not exist!');
            }
        }
    }
?>