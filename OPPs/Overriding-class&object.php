<?php

# Overriding Properties:
/*class base{
        public $name = "Parent Class";
    }
    
    class derived extends base{
        
        public $name = "Child Class";
    }

    // $test  = new base();
    $test  = new derived();

    echo $test->name; */

    
    # This is Method Overriding.
    class base
    {
        public $name = "Parent Class";
        
        public function calc($a, $b){
            return $a  * $b;
        }
    }

    # This is Properties Overriding.
    class derived extends base
    {

        public $name = "Child Class";

        public function calc($a, $b)
        {
            return $a  + $b;
        }
    }

    // $test  = new derived();

    echo $test->calc(4,8);
?>
