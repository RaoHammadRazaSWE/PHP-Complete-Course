<?php 
    # List of Magic Constants : total 8 hota hai.
    /*
    # First Four use anytime any one place:
    __LINE__
    __FILE__
    __DIR__
    __FUNCTION__
    
    # Last four  are used only Opps:
    
    __CLASS__
    __METHOD__
    __NAMESPACE__
    __TRAIT__
    
    */

    echo "Ya Line Number return kr ta hai: ".__LINE__;
    
    echo "<br>";
    
    echo "The full path of this file is: ".__FILE__;

    echo "<br>";

    function myFunction(){
        echo "The Function name is : " . __FUNCTION__;
    }
    myFunction();

    echo "<br>";

# Ab jo function hai oops say related:

    // namespace MyNamespace;
    
    trait MyTrait{
        public function getTraitName(){ 
            return __TRAIT__;
        }
    }
    class MyClass{
        // public function getclassName()
        
        // public function getNamespace()

        use MyTrait;
    }
        // {
        //     // return __CLASS__;
        //     return __CLASS__; # Method.
        // }
    
    
    $obj = new MYClass();
    
    // echo $obj->getclassName();
    // echo $obj->getNamespace();
    
    echo $obj->getTraitName();
    
?>
