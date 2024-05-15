<?php
/*
    class student{
        private static function hello(){
            echo "This is static hello function.";
        }
        
        public static function __callStatic($method, $argc) # Ya iss
        #time uses ho ga jab user class k bhir access krna ke try kra ga. 
        {
            echo"This is private method : $method";
        }
    }

    student::hello();
    */

# Agar ma chahta hu k user private static function ko bhir say 
# access kr lay to ya method uses krna hoga.

    class student
    {
        private static function hello($name)
        {
            echo "This is static Hello function , $name";
        }

        # Hum yaha phir chack kr raha k function exist kr ta hai ya ni
        
        public static function __callStatic($method, $argc) # Ya iss
        {    if(method_exists(__class__, $method)){ # __class__ ya 
        # constant method hai jis bhi class k under hota hai veriable
        # ka name autha kr la aita hai, name pass krna hai 
                call_user_func_array([__class__, $method], $argc);
            }else{
                echo "Method does not exist: $method";
            }
        }
    }

    student::hello("Rao Hammad");
?>
