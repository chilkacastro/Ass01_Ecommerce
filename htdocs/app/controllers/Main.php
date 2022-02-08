<?php
class Main extends Controller{
    public function __construct(){
        echo 'Hello from Main Controller';
    }

    /**
     * Calls the home view
     */
    public function home(){
        $this->view('Main/home');
    }
    
    /**
     * Calls the timeline view 
     */
    public function timeline(){
        $this->view('Main/timeline');
    }

}

?>