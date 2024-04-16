<?php 
    # What is constructor Function:
    class person{
        // public $name, $age;
        
        # Default values ko set krna ka method:
        public $name ; #= " No name "; # This Golobal scope every place use
        public $age ; #= 0 ;

        # This is Local Scope.
        function __construct($name = " No name " , $age= 0){ 
            $this->name = $name; 
            $this->age = $age; 
        }
        function show(){
            echo $this->name ." - " .$this->age . '<br/>';
        }
    }

    $p1 = new person(); # Pass Argument name , age.

    $p2 = new person("Hammad", 22) ;
    
    # p1 wale value ko ab sepreate write krna ke need ni hai.
    // $p1->name = "Rao"; 
    // $p1->age = 23; 
    $p1->show() ;
    $p2->show() ;
?>
