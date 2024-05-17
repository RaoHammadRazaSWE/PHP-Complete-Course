<?php 
    class calculation{
        public $a , $b;

        public function __construct($a, $b)
        {
            $this->a =  $a;
            $this->b =  $b;
        }
        
        // public function sum(){
        //     echo $this->a + $this->b;
        // }

        public function __invoke()
        {
            echo $this->a * $this->b;
        }
        
    }

    $obj = new calculation(4,7); 

    # Yaha Same method hai
    // $obj->sum(); # object ko call  karenga

    # But ab hum function k through call krata hai.iss k liya hum
    # invoke method use kra raha hai.
    
    $obj(); # Object ko hum yaha phir function bana kr cell kra raha hai.
?>
