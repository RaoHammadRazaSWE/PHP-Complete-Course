<?php 
    
    # Agar hum both see file ko connect krna chahta hai to him phela
    # Require functoin ka uses krta tha but hum iss say bather Autoload
    # method uses kr sakta hai.
    
    spl_autoload_register(function ($class) {
        require "classes/" . $class . ".php";
    });

    # object call:
    $test = new first();
    $test = new second();


?>
