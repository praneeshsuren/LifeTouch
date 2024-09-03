<?php
    class Controller{
        // To load the model
        public function model($model){
            require_once '../app/models/' . $model . '.php';

            // Instantiate the model and pass it to the controller member variable
            return new $model();
        }

        // To load the view
        public function view($view, $data = []){
            if(file_exists('../app/views/pages' . $view . '.php')){
                require_once '../app/views/pages' . $view . '.php';
            }else{
                die('View does not exist');
            }
        }
    }
?>