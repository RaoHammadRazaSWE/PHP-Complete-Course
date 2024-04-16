<?php 
    # isse knowledge:
    /* # Class & Properties & Method.
    class personal{      # Class.
        public $name = "Rao"; # This is Properties / Member variable

        # This is Method / Memeber Method.
        public function show(){
            echo $this->name;
        }
    } */

    # Topic Related:
    /*
    # Point No 1:
    
    # jab sara k sara varabiles & method static ho to ya Static class 
    # ban jay gi. Agar in ma ek bhe ni static ni hai to ni ho gi static.
    
    class personal{
        
    # Variable/Method ko static bana ka benfit ya hota hai k iss ko hum 
    # bhir bhi uses kr sakta hai bania object bana ek special keyword
    # use knra parta hai phala hum public ka bad name write kr raha tha
    # ab hum public k bad name say phala static write para ga. 
    
        public static $name = "Rao";
        public static function show()
        {
            echo self::$name; 
        
        # name say phala iss Jagah phir hum $this-> uses kr raha tha Q k
        # this represent krta hai Object ko Q k hum na yaha object ko to
        # ni he bana  iss liya hum $this ko uses ni kr sakta but is ke
        # jagah special keyword write kra ga self:: iss ko use Krta hai.
    
        }
    }
    
    # Bhir use krna ka tarika:
    
    personal::$name;
    personal::show(); 
    
    */

    /*
    # Point No 2:
    
    # jab hum staic variable and staic method ko inherited class k under
    # user knra hai.To hum Parent write kran para ga self ke jagah.
    
    class personal {
        public static $name = "Raza"; 
    }
    class personal extends accounts{
        public function show(){
            echo parent:: $name; # change self to parent.
        }
    }
    
    $test = new accounts();
    $test->show();
    */


    # Partices:
    
    class base{
        
        public static $name = "Hammad";
        
        # Agar hum static variable ko class k under uses kr ga to hum
        # Self write krna ho ga.
        
        // public static function show(){
        //     echo self::$name;
        // }
        
        # Bana object bania values ko uses krna bhir:
        
        // echo base::$name;
        // base::show();

        # jab ap varabiles ko static bana lata hai ab ap ki marze hai iss
        # tara call kr yaa above method uses kra:
    
        // $test = new base();
        // $test->show(); 

    # Creat construct function:
    
    /*
    # Jasay he ma iss class ka object bano ga who autioumatic run ho jay
    #  ga Construct function ya krta hai.
    
    // public function __construct()
    //     {
    //            self::show();
    //     }
    
    // $test = new base();
    // $test->show(); */
    
    
    // public function __construct($n) # Ab ma  value change krna kr
    # raha hu. constructon function ke mada say.
    
    //     {
    //         self::$name = $n;
    //            self::show();
    //     }
    }

    # value change krta hai
    // $test = new base("Hi Rao");
    // $test->show(); 
    
    
    #Ab hum static Variable/Method ko inherited class k under user knra
    # hai. To hum Parent write kran para ga self ke jagah.
    
    /*
    class derived  extends base{
        public static function show()
        {
            echo parent::$name;
        }
    }
    $test = new derived();

    $test->show(); 
    
?>
