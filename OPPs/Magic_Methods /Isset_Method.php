<?php
/*
    class student{
        public $course;
        private $first_name;
        private $last_name;

        public function setName($fname, $lname)
        {
            $this->first_name = $fname;
            $this->last_name_name = $lname;
        }

        # Private values ko chack krna.
        
        public function __isset($property)
        {
        echo isset($this->$property); # iss ko hum echo & return bhi kr sakta hai.
            
        }
    }

    $test = new student();
    // $test->course = "PhP";
    
    $test->setName("Rao", "Raza");

    echo isset($test->first_name);
    
    */

    # Array k ke ko chack krna:
    
    class student
    {
        public $course;
        private $first_name;
        private $last_name;
        private $detail = ['name'=>'Test Name', 'age' => '20'];

        public function setName($fname, $lname)
        {
            $this->first_name = $fname;
            $this->last_name_name = $lname;
        }

        # Private values ko chack krna.

        public function __isset($name)
        {
            echo isset($this->detail[$name]); 
        }
    }

    $test = new student();


    echo isset($test->age);

    ?>
