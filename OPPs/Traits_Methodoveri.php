<?php
    /*
    # Point No 1:
    # Traits ma Methdo Overriding.
    # Agar same name ka  function ho to iss uses krna ka method.
    
    trait hello{
        public function sayhello(){
            echo "Hello from Hello Trait.\n";
        } 
    }

    trait hi
    {
        public function sayhello()
        {
            echo "Hello from Hi Trait.\n";
        }
    }
    class A{
        use hello , hi{
            
        # iss ka mean ya hai k sayhello ko use kra aur hi wala ko
        # chor da. insteadof  is use leave hi.
        
        hello:: sayhello insteadOf hi; 
        
        # iss ka mean hai k hi wala ka name change kr k use kran.rename
        
        hi:: sayhello as newhello; 
        }
    }
    $test = new A();

    $test->sayhello();
    $test->newhello();*/

    # Point No 2:
    # Ab iss ma hum privete access modifier ko uses krna sakha ga
    # public kasa bana ta hai.
    
    trait hello
    {
        private function sayhello()
        {
            echo "Hello from Hello Trait.\n";
        }
    }

    class B{
        use hello{
            # iss traika sa hum private or protect ko use kr sakta
            # hai as write kr k.
            
            // hello::sayhello as public; # M1

            # iss ko use krna ka 2 traika Ya hai iss ka name change
            # kra use krna 

            hello::sayhello as public newhello;
        }
    }

    $test = new B();

    // $test->sayhello(); # M1
    
    $test->newhello();

?>
