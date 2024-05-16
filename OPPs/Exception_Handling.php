<?php

# Error Ko show krna:

# Simple Method:

// $n = 0;

// try{
//     if($n <= 0 ){
//         throw new Exception("Enter the valid number.");
//     }
// $div = 2 / $n;
// echo $div;
// }catch (Exception $e){
//     echo $e->getMessage();
// }

# Agar hum bar bar value ko dakhna chahta hai to Ye Method uses kra ga:

// function division($n){
//     try {
//         if ($n <= 0) {
//             throw new Exception("<br> Enter the valid number.");
//         }
//         $div = 2 / $n;
//         echo "<br>" . $div;

# Exception ek Inbuild Method hai:

// }catch (Exception $e) {
// echo $e->getMessage(); 

# Aur hum line ka number bhi check kr sakta hai. Error wale
// echo $e->getLine(); 

# Aur Agar hum line num ka code dakhana chahta hai to kaha say start hu hai:
// echo $e->getCode();

# Aur Agar hum file ko dakhana cahata hai jas ma Error ai raha hai to:
//     echo $e->getFile();
// }

# Finally function iss ma ye Run zaur ho ga agar koi Exception
# ma Error ai ya na ai koi Farak ni para ga:
//     finally{
//         echo "<br> Finally"; 
//     }
// }

# Call Function:
// division(2);
// division(0); # iss ma Error hai
// division(4);

# Hum Exception ko Khude Create kra sakta hai Ab hum iss ko Creat krta hai:

Class MyException extends Exception{
    function errorMessage(){
        $error = "My Exception Message: " . $this->getMessage() 
            . "<br> Error on line no. : " . $this->getLine();
            return $error;
    }
}
    function division($n)
    {
        try {
            if ($n <= 0) {
                throw new Exception("<br> Enter the valid number.");
            }
            if ($n == 3) {
                throw new MyException(" Number is 3 .");
            }
            $div = 2 / $n;
            echo "<br>" . $div;
            
        } catch (MyException $e) {
            echo $e->errorMessage();
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        finally {
            echo "<br> Finally";
        }
    }
    
# Call Function:
division(2);
division(3); 
division(4);
division(0);
?>
