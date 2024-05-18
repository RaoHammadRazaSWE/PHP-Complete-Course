<?php 
    class abc{
        public function __toString()
        {
            # Get class ya hum class ka name return kr ta hai.
            return "Can't print object as a string of class :" . get_class($this);
        }
    }

    $test = new abc();

    echo $test;
?>
