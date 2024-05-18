<?php
class student
{
    public $course = "php";
    private $first_name;
    private $last_name;
    private $conn;

    public function setName($fname, $lname)
    {
        $this->first_name = $fname;
        $this->last_name = $lname;
    } 

    public function __construct()
    {
        $this->conn = mysqli_connect();
    }
    
    # Ma sirf first name aur last name ke value lana chahat hu.
    public function __sleep()
    {
        mysqli_close($this->conn);
        return array("first_name", "last_name");
    }

    # Uses Wakeup method. Mostaly develper use database k connect ko connected kran k liya.
    
    public function __wakeup()
    {
        $this->conn = mysqli_connect();
        echo "This is wakeup method "; 
    }
}

$obj = new student();

# ab ma value ko set krta hu.

$obj->setName("Rao", "Raza"); # Private value ko set kiya.

$srl = serialize($obj); # object ko seriallize kiya.

# Ab  ma  objet ko unseriallize krna chata ha hu to ya method user kro ga.

$us = unserialize($srl);

print_r(($us));
?>
