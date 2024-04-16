<?php
# function

// function foo($x, $y)
// {
//     return $x * $y;
// }

// echo foo(5, 10);

# Another way of parameter:

// declare(strict_types=1);

// function foo(int|float $x, int|float $y)
// {
//     return $x * $y;
// }

// echo foo(5.5, 10);

# Variable Scopes  - Static Variables

// $x = 5;
// function foo() {
//     $GLOBALS['x'] = 10;
//     echo $GLOBALS['x'];
// }
// foo();
// echo $x;

# Static Variables 

// function getValue(){
//     static $value = null;
    
//     if($value === null){
//         $value = someVeryExpensiveFunction();
//     }
    
//     // some more processing with $value
    
//     return $value;
// }
// function someVeryExpensiveFunction(){
//     sleep(2);

//     echo 'Processing';

//     return 10;
// }

// echo getValue(),'<br/>';
// echo getValue(),'<br/>';
// echo getValue(),'<br/>';

# Variable, Anonymous, Callable, Closure & Arrow Functions:

# Variable

// function sum (int|float ...$numbers):int|float {
//     return array_sum($numbers);
// }
// $x = 'sum';
// if(is_callable($x)){
//     echo $x(1,2,3,456);
// } else {
//     echo 'Not Callable';
// }

# Anonymous: no need name 

// $sum = function (int|float ...$numbers):int|float {
//     return array_sum($numbers);
// };

// echo $sum(1,3,4,5);

#  Callable , Closure :

// $sum = function (callable $callback, int|float ...$numbers): int|float {
//     return $callback( array_sum($numbers));
// };
// echo $sum(function($element){
//     return $element * 2;
// },1,2,3,4);

# Arrow function:

// $array = [1,2,3,4];

// $y = 5;
// $array2 = array_map(fn($numbers) => $numbers * $numbers * ++$y, $array);

// echo '<pre>';
// print_r($array2);
// echo '</pre>';

// echo $y;

# Date & Time.

// echo date_default_timezone_get().'<br/>';
// $currenTime = time() . '<br/>';
// echo date('m/d/y g:ia'). '<br/>';

// echo date('m/d/Y g:ia', strtotime('first friday of November')) . '<br/>';


# Array Functions:

$array = ['d' =>3, 'b' =>1, 'c' => '2'] ;
print_r($array) ;
echo"<br>"; 
asort($array) ;
print_r($array) ;
