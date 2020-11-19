<?php
    
    // № 1
    // FUCTION FOR CHECK SUM OF DIGITS
    function sum_of_digits($my_num){
      $sum = 0;
      for ($i = 0; $i < strlen($my_num); $i++){
         $sum += $my_num[$i];
      }
      return $sum;
   }
   $my_num = "624";
   print_r("The sum of digits is ");
   echo sum_of_digits($my_num) .'<br>';
   

/*
   // № 2
   // PHP code to check whether the number 
   // is Even or Odd in Normal way 
    function check($number){ 
        if($number % 2 == 0){ 
            echo "Even number"; 
        } 
        else { 
            echo "Odd number"; 
        } 
    } 

    // Driver Code 
    $number = 12; 
    check($number) 

    // № 3
    //FUNCTION FOR CHECK NUMBER PRIME OR NOT

    function check_prime($num)
    {
        if ($num == 1)
        return 0;
        for ($i = 2; $i <= $num/2; $i++)
        {
            if ($num % $i == 0){
                return 0;
            }
            
        }
        return 1;
    }
    $num = 57;
    $flag_val = check_prime($num);
    if ($flag_val == 1) {
        echo "It is a prime number";
    }
    else {
        echo "It is a non-prime number";
    }
    
    
    // № 4
    // TABLE OF NUMBER
    $num = 2;  
    for($i=1; $i<=10; $i++)   
    {   
        echo $i*$num;   
        echo '<br>';     
    } 
    
    // № 5
    // FACTORIAL OF NUMBER
    $num = 6; 
    $factorial = 1;  
    for ($x=$num; $x>=1; $x--)   
    {  
        $factorial = $factorial * $x;  
    }  
    echo "Factorial of $num is $factorial";  
    
    // № 6
    //FUNCTION FOR CHECKING ARMSTRONG NUMBER
    function armstrong_number($num) {
        $sl = strlen($num);
        $sum = 0;
        $num = (string)$num;
        for ($i = 0; $i < $sl; $i++) {
          $sum = $sum + pow((string)$num{$i},$sl);
        }
        if ((string)$sum == (string)$num) {
          return "True";
        } else {
          return "False";
        }
    }
    echo "Is 1634 Armstrong number? ".armstrong_number(1634) . '<br>';
    echo "\nIs 371 Armstrong number? ".armstrong_number(371) . '<br>';
    echo "\nIs 342 Armstrong number? ".armstrong_number(342) . '<br>';"\n"
    

    // № 7
    // POLINDMORE NUMBER
    $input = 1234322;
    echo '<br>'.'Input number: '. $input;
    $reverse = strrev($input);
    echo '<br>'.'Reverse number: '.$reverse;
    if($input == $reverse) {
    echo '<br>'.$input.' is a palindrome';
    }
    else {
    echo '<br>'.$input.' is not a palindrome';
    }
    
    // № 8 
    // PRINTING FIBONACHI SERIES WITHOUT RECURSIVE WAY
    function Fibonacci($n){
        $num1 = 0; 
        $num2 = 1;
        $counter = 0; 
        while ($counter < $n){ 
            echo ' '.$num1; 
            $num3 = $num2 + $num1; 
            $num1 = $num2; 
            $num2 = $num3; 
            $counter = $counter + 1; 
        } 
    } 
  
    // Driver Code 
    $n = 11; 
    Fibonacci($n); 
    

    // PRINTING FIBONACHI SERIES USING RECURSIVE WAY
    function Fibonacci($number){ 
      
        // if and else if to generate first two numbers 
        if ($number == 0) 
            return 0;     
        else if ($number == 1) 
            return 1;     
          
        // Recursive Call to get the upcoming numbers 
        else
            return (Fibonacci($number-1) +  
                    Fibonacci($number-2)); 
    } 
      
    // Driver Code 
    $number = 10; 
    for ($counter = 0; $counter < $number; $counter++){   
        echo Fibonacci($counter),' '; 
    } 

    
    // № 9 
    // FUNCTION FOR REVERSE NUMBER
    function reverse_number($number)
    {
        //Typecast the number into string.
        $snum = (string) $number;
        //Reverse the string.
        $revstr = strrev($snum);
        // Typecast string into int.
        $reverse = (int) $revstr;
        return $reverse;
    }
    echo reverse_number(234);
    
    // № 10
    // FUNCTION FOR REVERSE STRING
    function reverse_number($stringg)
    {
        //Typecast the number into string.
        $sstr = $stringg;
        //Reverse the string.
        $revstr = strrev($sstr);
        //Typecast string into int.
        $reverse = $revstr;
        return $reverse;
    }
    echo reverse_number('QODIR-SONAP');
    
*/

?>
