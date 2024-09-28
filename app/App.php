<?php
class App
{
    private $__controller, $__action, $__params, $__conn, $__instanceController;
    public function __construct($conn)
    {
        $this->__conn = $conn;
        $this->__controller = "home";
        $this->__action = "index";
        $this->__params = array();
        $this->handleUrl();
    }
    /**
     * Get the $__server["URI"] and return the array if the URI exist and not null
     * Return NULL if the URI is not exist
     * @return array|null
     */
    function getURL()
    {
        $path = array_filter(array_values(explode("/", $_SERVER["REQUEST_URI"])));
        if (count($path) > 1) {
            unset($path[1]);
            return array_values($path);
        }
        return null;
    }
    /**
     * handle the URL and put the data in the $__controller,action,params
     * @return void
     */
    function handleUrl()
    {
        // get the URL path
        $url = $this->getURL();
        // check if the URL is null
        if (!empty($url)) {
            if (!empty($url[0])) {
                $this->__controller = ucfirst($url[0] . "Controller");
            }
            if (!empty($url[1])) {
                $this->__action = ucfirst($url[1]);
            }


            if (!empty($url[2])) {
                $this->__params["data"] = $url[2];
            }

            /**
             * check if $__controller."Controller" file exist or not.
             */
            $file = "app/controllers/" . $this->__controller . ".php";
            if (file_exists($file)) {
                require_once $file;
                if (class_exists($this->__controller)) {
                    $this->__instanceController = $this->createInstanceController($this->__conn);
                    if (method_exists($this->__instanceController, $this->__action)) {
                        call_user_func_array([$this->__instanceController, $this->__action], $this->__params);
                    }
                }
            }
        } else {
            /**
             * if null then call directly to the home view
             */
            $this->__controller = ucfirst($this->__controller) . "Controller";
            $file = "app/controllers/" . $this->__controller . ".php";
            require_once $file;
            $this->__instanceController = $this->createInstanceController($this->__conn);
            call_user_func_array([$this->__instanceController, $this->__action], $this->__params);
        }
    }
    private function createInstanceController($conn)
    {
        return new $this->__controller($this->__conn);
    }
}
