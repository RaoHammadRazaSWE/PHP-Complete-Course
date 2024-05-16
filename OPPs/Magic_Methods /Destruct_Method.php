<?php 
    # Destruct Method : is used when object method complete the  work
    # then destruct method call.

    class abc{
        
        # simple method:
        // public function __construct()
        // {
        //     echo "This is Construct function <br>";
        // }

        # Basically use this method:
        private $conn;
        public function __construct()
        {
            $this->conn = mysqli_connect();
        }

        // public function hello()
        // {
        //     echo "Hello Everyone <br>";
        // }

        public function insert()
        {
            echo "Hello Everyone <br>";
        }

        # Simple use 
        // public function __destruct()
        // {
        //     echo "This is destruct fuction <br>";
        // }

        # Sql ma destruct function ko close krna k liya uses krta sakta hai.
        public function __destruct()
        {
            mysqli_close($this->conn);
        }
    }
    
    $test = new abc();
    // $test->hello();
?>
