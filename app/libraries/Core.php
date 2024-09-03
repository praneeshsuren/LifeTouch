<?php
class Core {
    protected $currentController = 'Pages';
    protected $currentMethod = 'index';
    protected $params = [];

    public function __construct() {
        $url = $this->getUrl();
        
        // Debug: print the URL array
        echo '<pre>';
        print_r($url);
        echo '</pre>';

        // Look in controllers for first value
        if ($url !== null && file_exists('../app/controllers/' . ucwords($url[0]) . '.php')) {
            // If the controller exists, then load it
            $this->currentController = ucwords($url[0]);

            // Unset the controller in the URL
            unset($url[0]);

            // Call the controller
            require_once '../app/controllers/' . $this->currentController . '.php';

            // Instantiate the controller class
            if (class_exists($this->currentController)) {
                $this->currentController = new $this->currentController;
            } else {
                // Handle the error - class does not exist
                die('Controller class does not exist.');
            }

            // Check whether the method exists in the controller
            if (isset($url[1]) && method_exists($this->currentController, $url[1])) {
                $this->currentMethod = $url[1];
                unset($url[1]);
            }

            // Get parameter list
            $this->params = $url ? array_values($url) : [];

            // Call a method and pass the parameter list
            call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
        } else {
            // Handle the error - file does not exist
            die('Controller file does not exist.');
        }
    }

    public function getUrl() {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
        return null;
    }
}
?>
