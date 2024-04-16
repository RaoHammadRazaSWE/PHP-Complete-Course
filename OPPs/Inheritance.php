<?php 
    class employee{
        public $name;
        public $age;
        public $salary;

        # Constructor:
        function __construct($n, $a, $s)
        {
            $this->name = $n;
            $this->age = $a;
            $this->salary = $s;
        }
        
        # Show krna k liya function.
        function info(){
            echo "<h3>Employee Profile</h3>";
            echo "Employee Name: ".$this->name .'<br/>';
            echo "Employee Age: ".$this->age .'<br/>';
            echo "Employee Salary: ".$this->salary .'<br/>';
        } 

    }

    # I Create second class jo inherit kran gi employee class ko
    # this is called Derived class : iss ma extends lika na parta hai.
    
    class manager extends employee{
        public $ta = 1000;
        public $phone = 300;
        public $totalSalary;
        
        function info()
        {
            $this->totalSalary = $this->salary + $this->ta + $this->phone;
            echo "<h3>Manager Profile</h3>";
            echo "Employee Name: " . $this->name . '<br/>';
            echo "Employee Age: " . $this->age . '<br/>';
            echo "Employee Salary: " . $this->totalSalary . '<br/>';
        } 

    }
    # Object 
    
    $e1 = new manager("Rao", 24, 1000);
    $e2 = new employee("Raza", 27, 2000);
    
    # call function:
    $e1->info(); 
    $e2->info(); 
    
?>
