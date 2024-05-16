<?php 

    /*
    # Copy by value
    $a = 5;
    $b = $a;
    $b = & $a; # Copy by reference variable a k address ka . 
    $b = 10;
    echo $a;
    */
    
    
    
    // class student{
    //     public $name;
    //     public $course;

    //     public function __construct($n)
    //     {
    //         $this->name = $n;
    //     }
    // }

    /*
    $student1 = new student("Roa Ali");

    # This is copy by reference method use.
    $student2 = $student1;
    
    $student2->name = "RAZA";
    echo $student1->name;
    */

    # This is copy by vaule method:
    
    // $student1 = new student("Roa Ali");

    // $student2 = clone $student1;

    // $student2->name = "RAZA";
    
    // echo $student1->name;
    // echo $student2->name;
    

    # Clone ka Error kha phir aita hai:

    class student
    {
        public $name;
        public $course;

        public function __construct($n)
        {
            $this->name = $n;
        }

        public function setCourse(course $c){
            $this->course = $c;
        }

        # Ab hum Clone method ko use kr raha cname k problem ko slove
        # krna k liya jo hum end phir ai tha.
        
        public function __clone()
        {
            $this->course = clone $this->course;
        }
        
    }

    class course{
        public $cname;
        public function __construct($cn)
        {
            $this->cname = $cn;
        }
    }

    $student1 = new student("Roa Ali");
    
    # Yaha phir hum ek suboject bana raha hai course ka . 
    $course1 = new course('PHP');
    
    $student1->setCourse($course1);
    
    $student2 = clone $student1; # Yah clone hum 2 different name da raha hai.

    $student2->name = "RAZA";
    
    # Iss time hum ek problem k face krna para ga k cname 2 ma same iss
    # problem ko solve kran k liya hum Clone Method ka uses krna para ga.

    $student2->course->cname = 'Python';
    
    print_r($student1);
    echo "<br>";
    print_r($student2);
    ?>
