<?php 
    /*
    class abc{
        private $name = "Rao";

        public function __get($property){ # get k under 1 parameter dana zure hota hai.
            echo "You are trying to access Non Existing or Private property($property)";
        }
    }

    $test = new abc();
    $test->name;
    */

    # As key pass kr k get ko uses krna:

    class abc{
        private $data = ["name"=>"Rao Hammad","course"=>"PhP"];

        public function __get($key)
        {
            if(array_key_exists($key,  $this->data)){
                return $this->data[$key];
            }

            else{
                return "This key($key) is not defined.";
            }
        }
    }

    $test = new abc() ;
    
    echo $test->course;
?>
