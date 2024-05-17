<?php 
    class student{
        public $course = "php";
        private $first_name;
        private $last_name;

        public function setName($fname, $lname){
            $this->first_name = $fname;
            $this->last_name = $lname;
            
        }
        
        # Ma sirf first name aur last name ke value lana chahat hu.
        public function __sleep()
        {
            return array("first_name", "last_name");
        }
    }

    $obj = new student();

    # ab ma value ko set krta hu.

    $obj->setName("Rao", "Raza"); # Private value ko set kiya.

    $srl = serialize($obj); # object ko seriallize kiya.

    echo $srl;

    # Hum objec ke value sadia say ni autha sakta. hum ma srl krna parta hai
?>
