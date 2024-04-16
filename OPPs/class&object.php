<?php
class calculation
{
    public $a, $b, $c; // Access modifier.
    //jo hum variable delecare kiy hai is ko properties thata hai.

    # Method:
    function sum()
    {
        $this->c = $this->a + $this->b;
        return $this->c;
    }

    function sub()
    {
        $this->c = $this->a - $this->b;
        return $this->c;
    }
}
# Class ka Object call krna k liya:

$c1 = new calculation();

$c1->a = 10; # Value assien krna ka method.
$c1->b = 30;

$c2 = new calculation();
$c2->a = 100;
$c2->b = 30;

echo "sum value of C1 :" . $c1->sum() . '<br/>';

echo "sub value of C2 :" . $c2->sub() . '<br/>';

echo "sub value of C1 :" . $c1->sub();
?>



<?php
/* 
# Class & Properties & Method.
    class personal{ # Class.
        public $name = "Rao"; # This is Properties. other name Member variable

        # This is Method. other name Member Method.
        public function show(){
            echo $this->name;
        }
    } */
?>
