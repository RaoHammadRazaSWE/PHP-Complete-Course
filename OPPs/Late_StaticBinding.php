<?php 
class base{
    protected static $name = "Rao";
    public function show(){
        echo static::$name; # Late Static Binding. Print derived class
        echo self::$name; # Print values Parent Class.

    }
}

class derived extends base{
    protected static $name = "Raza";
}

// $test = new derived(); # wasa comment kr rahu Q k erro nazar ai hai list ma

$test->show(); 
?>
