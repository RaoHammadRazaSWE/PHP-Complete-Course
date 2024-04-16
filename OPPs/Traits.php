<?php 
    trait hello{
        public function sayhello(){
            echo "Hello everyone";
        }

        public function what()
        {
            echo "what is this, what's up";
        }
        
        public function Nice()
        {
            echo "Nice Bro good job";
        }
    }
    
    trait bye{
        public function saybye(){
            echo "Bye Bye everyone ";
        }

        public function Wiat()
        {
            echo " Where are your from ";
        }
    }
    
    class  A{
        use hello;
    }
    
    # Agar ma phale trait k sath dusra  ko user krna chahta hu ko
    class B
    {
        use bye,hello;
    }

    # Creat Object Class.
    $Rao = new A();
    $Ali= new B();
    
    $Rao->sayhello();
    echo "<br>";

    $Rao->what();
    echo "<br>";

    $Rao->Nice();
    echo "<br>";
    
    $Ali->Wiat();
    echo "<br>";
    
    $Ali->saybye();
    echo "<br>";

    $Ali->Nice();
    
    
    
    
    
    
    
    
?>
