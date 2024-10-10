<?php

if($argc!== 4){
    $num1 = (float)readline("Enter first number : ") ;
    $operator = readline("Enter any operator : (+, -, * , *, %)  : ");
    $num2 =  readline("Enter second number : ");

}else{
   $num1 = (float)$argv[1];
   $operator = $argv[2];
   $num2 = $argv[3]; 
}

switch($operator){
    case "+":
        echo $num1 + $num2;
        break;
    case "-":
        echo $num1 - $num2 . "\n";
        break;
    case "*":
        echo $num1 * $num2 . "\n";
        break;
        case "/":
   if($num2 == 0){
    echo " Error division by 0 is not valid";
   }else{
    echo $num1 / $num2 . "\n";
        break;
   }
    case "%":
        if($num2 == 0){
            echo " Error modulus by 0 is not valid";
           }else{
            echo $num1 % $num2 . "\n";
                break;
           }
}


?>