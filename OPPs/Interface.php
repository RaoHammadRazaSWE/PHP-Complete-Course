<?php 
/* Basice Introduction of interface.

# Basicaly it is uses security properse k liya.

    interface A{ # 1.
        # method:
        function hello($n); # not use protected or private. 
        # iss ka under proterties/membervaiable ko ni bana sakta.
        # na value da saktahai.
    }
    interface C{
        function hi($n); # 2.
        function bye(); # not use protected or private. 
    }

    // $test = new A(); no create object/instantiate. # 3.

    # 4. iss ko hum uses krna k liya Drive class k bad implements
    # etc class name
    
    class B implements A, C{ 
        public function hello($n){
            echo "Hello".$n;
        }
        public function hi($n){
            echo "hi".$n;
        }
        public function bye(){
            echo "Bye";
        }
    } */


    # Practice :
    interface parent1{
        # Method:
        function calc($a, $b);
    }
    
    interface parent2{
        function sub($c, $d);
    }

    # user krna interface ka liya Derive class:
    class childClass implements parent1, parent2 {
        # Method ko implements krna:
        public function calc($a, $b){ # above and blew parameter same.
            echo $a + $b;
        }

        public function sub($c, $d)
        {
            echo $c - $d;
        }
    }

    # but hum kisse bhi class ka to instance/object bana sakta hai.
    $test = new childClass();

    # Ab hum drive class ko uses kr sakta hai.
    
    # syntax : object ka  name -> function name();

    # Method :1
    $test->calc(20 , 35);

    echo "<br>"; # Next line k liya.
    # Method :2
    $test->sub(20, 10);
    
    
?>
