<?php
# Forexample :
# Type Hinting iss ma int k uses krna say Ya clear ho ga k ab iss
# ma srting value ni ai gi or fcuntion run bhi ni ho ga.
# aur humra time waste ni ho ga.

// function sum(int $value){
//     echo $value + 10;
// } 

// sum(10);

// sum("Hey"); 
# Agar use string value enter kr ta hai to error ai ga
# is ko solve krna k liya Type Hinting/Type declaration ka uses kiya jata hai. 

# Array wale vaues.
/*
        function fruits(array $names){
            foreach ($names as $names){
                echo $names . "<br>";
            } 
        }
        
        $test = ["Apple","Orange","Banaan"];
        fruits($test);
        */


# Ab class ka uses krta hai.
/*
    class hello{
        public function sayhello(){
            echo "Hello Everyone";
        }
    }

    class bye{
        public function saybye(){
            echo "Bye Everyone";
        }
    }

    # Dakha jab hum function ko call kr raha hai to class ko object
    # bhi pass  kr sakta hai. jo type hinting k under uses kr sakta hai.
    
    function wow(hello $c){
        $c->sayhello();
    }

// $test = new bye();  # Ya error show kra ga.

    $test = new hello();
    wow($test);
    */

# Class and Object ka Advance Example:

    class school
    {
        public function getNames(student $names)
        {
            echo "<ul>";
            foreach ($names->Names() as $name){
                echo "<li>" .$name . "</li>";
            }
            echo "</ul>";
        }
    }

    class student
    {
        public function Names()
        {
            return ["Rao", "Raza" , "Hammad"];
        }
    }

    $stu = new student();
    $sch = new school();

    $sch->getNames($stu);
?>
