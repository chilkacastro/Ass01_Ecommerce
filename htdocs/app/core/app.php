<?php

    /*
        This is our core app file. 
        It is responsible for the routing of our application 
        Programmatically mapping of URLs to controllers and methods

        URL pattern:- /controller/method/params
    */

    class App{
        protected $currentController = 'Main';
        protected $currentMethod = 'home';
        protected $params = [];

        /**
         * App Class Constructor
         */
        public function __construct()
        {  
            // Step 1: Calls the parseURL() which returns an array of URL
            $url = $this->parseURL();

            // Step 2 : Change controller if index 0 of url exists
            if (file_exists('../app/controllers/'.$url[0].'.php')){  // url[0] is the controller
                $this->currentController = $url[0];   // change the value of the currentController to the input url[0]
                unset($url[0]);                       // clear out the data of index 0 of the url array
            }

            // Step 3: Require the controller | require_once -> one time only and if it is already included then it will not require it again
            require_once '../app/controllers/'.$this->currentController.'.php';     // $this -> currentController is the syntax for PHP when calling the variable

            // Step 4 : Instantiate the controller class 
            $this->currentController = new $this->currentController;   // create an object of the currentController using keyword "new" // php knows which controller to make
            
            // Step 5 : check for the method name in the url 
            if (isset($url[1])){  // check if there is a value in variable url[1]  | $url[1] is the method 
                //Step 5.1 : Check to see if such method exists in the controller 
                if (method_exists($this->currentController, $url[1])) {
                    $this->currentMethod = $url[1];      // if the method exists in the current controller then change the value of the currentMethod to $url[1]
                    unset($url[1]);                      // after using clear out the value of the $url[1]
                }
            }

            // Step 6: Check if there is any parameter and if there is then get the params from the url but if there is none then return an empty array 
            $this->params = $url ? array_values($url) : [];

            //Step 7: Calling the method in our currentController with an array of params 
            call_user_func_array([$this->currentController, $this->currentMethod], $this->params);    // call_user_func_array([the controller, the method name], params array)
        }

        /**
         * Gets the input URL, clean it and then return it as an array
         */
        public function parseURL(){
            if(isset($_GET['url'])){
                $url = rtrim($_GET['url'], '/');    // $url here is of local scope
                $url = filter_var($url, FILTER_SANITIZE_URL);
                $url = explode('/',$url);
                return $url;
            }
        }
    }
?>