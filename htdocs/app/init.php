<?php 
    //adding our config file 
    require_once 'config/config.php';                           // to initialize the config folder in order to be able to use it

    // Use the spl_autoload_register found below for the core to avoid repetition of code
    //    require_once 'core/app.php';
    //    require_once 'core/Controller.php';
    
    spl_autoload_register(function($className){
        require_once 'core/'. $className .'.php';               // to initialize everything inside the core folder in order to be able to use it
    });
