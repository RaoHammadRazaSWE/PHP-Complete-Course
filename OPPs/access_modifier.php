<?php
# We use it because it allows the user to restrict what to show
# and what not to show, and these are of three types.

# 1. Public  2. Protected 3. Private.

# First one Public: 
/*class A{
        public $name ;
        public function show(){
            echo $this->name;
        }
    }

    class B extends A
    {
        public function get()
        {
            echo "Your Name" .$this->name;
        }
    }
    
    # Hum iss bhire say he access kr sakta hai object bana kr.
    $test = new A();

    $test->name = "Rao H"; # Object bana k.
    
    $test->show(); # Function bana k. */

# Second one is Protected: 
/*class A
    {
        protected $name;
        protected function show()
        {
            echo $this->name;
        }
    }
    
    # iss hum bhir se to assess ni kr sakta but Derived class bana k
    # access kr sakta hai.
    class B extends A
    {
        public function get()
        {
            echo "Your Name" . $this->name;
        }
    }

    # Hum iss bhire say he access ni kr sakta hai.
    $test = new A();

    // $test->name = "Rao H"; # no.

    // $test->show(); # no.*/

# Third One is Private: iss ko hum siraf class k under he uses 
# kr sakta hai Jo hum na 1 class bani hai.
/*class A
    {
        private $name;
        private function show()
        {
            echo $this->name;
        }
    }

    # iss ko hum bhir se bhi ni assess kr sakta aur na Derived class 
    # bana k access ni access kr sakta hai Ya full Secure hota hai.
    class B extends A
    {
        public function get()
        {
            // echo "Your Name" . $this->name; # not allowed
        }
    }

    # Hum iss bhire say he access ni kr sakta hai.
    $test = new A();

        // $test->name = "Rao H"; # no.

        // $test->show(); # no.*/

# Now  we are work with Example:

# Example: 1
/* class base
{
    public $name;  

    public function __construct($n)
    {
        $this->name = $n;
    }

    public function show()
    {
        echo "Your Name :" . $this->name . '<br/>';
    }
}

$test = new base("Raza");

$test->name = "Rao"; # iss ma value change kr sakta hai.

$test->show(); */


# Example: 2
/* class base
{
    protected $name; 

    public function __construct($n)
    {
        $this->name = $n;
    }

    protected function show()
    {
        echo "Your Name :" . $this->name . '<br/>';
    }
}

class derived extends base{
    public function get() # yaha phir ma function ka name chage krta hu
    {
        echo "Your Name :" . $this->name . '<br/>';
    }
}

$test = new derived("Raza");

// $test->name = "Rao"; # values ko change ni kr sakta.

$test->get(); */

# Example: 3

class base
{
    private $name;

    public function __construct($n)
    {
        $this->name = $n;
    }

    protected function show()
    {
        echo "Your Name :" . $this->name . '<br/>';
    }
}

class derived extends base
{
    public function get() # yaha phir ma function ka name chage krta hu
    {
        // echo "Your Name :" . $this->name . '<br/>';
    }
}

$test = new derived("Raza");

// $test->name = "Rao"; # values ko change kr sakta derived class ka help.

$test->get();

?>
