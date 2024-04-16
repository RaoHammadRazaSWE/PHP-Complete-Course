<?php 
    abstract class parentClass{
        public $name;
        
        # came sa came ek abstract ka hona zore hai. iss ko hum Declare 
        # to kra ga but implement ni kra ga.
        abstract protected function calc($a, $b);
        }
        # Drive class k under implement krna ga class.
    class childClass extends parentClass{
        public function calc($c, $d){
            echo $c + $d;
        }
    }
    
    $test = new childClass();
    $test->calc(23, 35);
?>
