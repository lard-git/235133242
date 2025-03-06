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
?>

