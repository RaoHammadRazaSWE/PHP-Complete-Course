<?php
/* 
    class student{
        
        private $first_name;
        private $last_name;

        # Value ko set krna K liya:
        
        private function setName($fname, $lname){
            $this->first_name = $fname;
            $this->last_name = $lname;
        }
        
        public function __call($method, $args){ # fatial error or professional bana k liya.
            echo "This is private or Non existing method : $method ";
            print_r($args);
        }
    }

    $test = new student();

    $test->setName("Raza","Rao");
    */

class student
{

    private $first_name;
    private $last_name;

    # Value ko set krna K liya:

    private function setName($fname, $lname)
    {
        $this->first_name = $fname;
        $this->last_name = $lname;
    }

    public function __call($method, $args)
    { # fatial error or professional bana k liya.
        if(method_exists($this, $method))# Ya iss time use hota hai jab apna kise particular method ko search krna hai class k under
        {
            call_user_func_array([$this, $method], $args); # Ya callback funcion hota hai iss ka use itna ka hai k hum class k bhir hum iss say call krn sakta hai
        }
        else{
            echo "Method does not exist : $method ";
        }
    }
}

# Bhir sa value ko set kran private values ko :

$test = new student();

$test->setName("Rao", "Raza");

# Bhir say function k result ko dakha na tarka:

echo "<pre>";
print_r($test); # print_r hum array ke acuall values ko dakhan k liya uses krta hai. aur iss ka uses hum object k liya be kr sakta hai.
echo "</pre>";
?>
