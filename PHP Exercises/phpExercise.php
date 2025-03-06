<?php
    $a = 15;
    $b = 7;
    echo "Sum: " . $a + $b . "\n";
    echo "Difference: " . $a - $b . "\n";
    echo "Product: " . $a * $b . "\n";
    echo "quotient: " . $a / $b . "\n";

    $sum = $a + $b;
    
    if ($sum% 2 == 0){
        echo "Number is even";
    }   else{
        echo "NUmer is odd";
    }
    
    if ($sum >= 1){
        echo "\nNumber is possitive";
    }   elseif ($sum < 0){
        echo "\nnumber is negative";
    }   else{
        echo "\nnumber is zero";
    }

    
    for($a = 1; $a <=100; $a += 1){
        if($a % 3 == 0 && $a % 5 ==0){
            echo "\n FizzBuzz";
        }elseif($a % 5 ==0){
            echo "\n Buzz";
        }elseif($a % 3 == 0){
            echo "\n fizz";
        }
        else{
            echo "\n".$a;
        }
    }
    
   
    $q = 0;  
    $w = 1;  
    $n = 10; 
    echo "Fibonacci : $q, $w";  

    for($i = 2; $i < $n; $i++) {  
        $e = $q + $w;  
        echo ", $e";  
        $q = $w;  
        $w = $e;  
    }  
?>

