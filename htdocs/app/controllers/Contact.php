<?php

/**
 * Contact class 
 */
class Contact extends Controller {
    public function __construct()
    {
        //echo "Hello from the Contact Controller";
    }

    /**
     * about() method invokes the about view when Controller is Contact
     */
    public function about(){
        $this->view('Contact/about');  // calls the view --> 'Contact' for the folder inside the views folder
    }
    
    /**
     * contactus() method invokes the contactus view when the Controller is Contact
     */
    public function contactus(){
        $this->view('Contact/contactus');
    }
}

?>