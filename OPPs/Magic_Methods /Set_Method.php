<?php
/*
    class student{
        private $name;

        public function __get($property)
        {
            echo "Your are trying to access Non existing or private property ($property)";
        }
        public function __set($property, $value){
            echo "This is a Non existing or private property: $property";
        }
        
    }

    $test = new student();

    // $test->name = "Hammad";
    $test->course = "php"; */

    # Agar user value ko bhir say set knra chahta hai to ya method user:
    class student
    {
        private $name;
        
        # ma iss ko show krna chahra hu:
        public function hello(){
            echo $this->name;
        }

        public function __get($property) # valus ko access krna k liya bhir
        {
            echo "Your are trying to access Non existing or private property ($property)";
        }
        public function __set($property, $value) # values ko set krna k liya
        {
            if (property_exists($this, $property)){
                $this->$property = $value; # Ya koi member variable ni hai iss ma $ use krna hai.
            }
            else{
                echo "Propety does not exist : $property";
            }
        }
    }

    $test = new student();
    $test->name = "Rao Hammad Raza"; # Yaha phir prive propert ko value set ki hai.

    # ab iss function ko call krta hai hello:
    $test->hello();
?>
