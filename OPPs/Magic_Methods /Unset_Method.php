<?php
    class student{
    public $course = "php";
    private $first_name;
    private $last_name;
    
    public function setName($fname, $lname){
        $this->first_name = $fname;
        $this->last_name = $fname;
    }
    
    # Yah is time run ho ga jab hum bhir private propety ko delete krna
    #  k Try kra ga.
    
    public function __unset($property){ 
        unset($this->$property);
    }
    
    }

    # Private Property ko unset krna:
    
    $test = new student();
    $test->setName("Rao Hammad", "Raza");

    unset($test->first_name);

    print_r($test);
    
    
    // unset($test->course);
    // echo $test->course;
?>
