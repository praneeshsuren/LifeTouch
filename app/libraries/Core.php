<?php
class Core {
    // URL format --> /controller/method/params
    protected $currentController = 'Pages';
    protected $currentMethod = 'index';
    protected $params = [];

    public function __construct() {
        $url = $this->getUrl();

        // Look for the controller in the controllers folder
        if ($url && file_exists('../app/controllers/' . ucwords($url[0]) . '.php')) {
            // If the controller exists, load the controller
            $this->currentController = ucwords($url[0]);

            // Unset the controller in the URL array
            unset($url[0]);
        }

        // Require the controller
        require_once '../app/controllers/' . $this->currentController . '.php';

        // Instantiate the controller
        $this->currentController = new $this->currentController;

        // Check whether the method exists in the controller
        if (isset($url[1])) {
            if (method_exists($this->currentController, $url[1])) {
                // If the method exists, set the method as the current method
                $this->currentMethod = $url[1];

                // Unset the method in the URL array
                unset($url[1]);
            }
        }

        // Get the parameters list
        $this->params = $url ? array_values($url) : [];

        // Call the method and pass the parameter list
        call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
    }

    public function getUrl() {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);

            return $url;
        }
    }
}
?>
