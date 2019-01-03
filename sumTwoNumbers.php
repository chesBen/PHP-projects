<?php
    $firstNumber = floatval(readline());
    $secondNumber = floatval(readline());
    $sum = $firstNumber + $secondNumber; 
    $result = number_format($sum, 2, '.', '');
    echo "\$firstNumber + \$secondNumber = $firstNumber + $secondNumber = $result";
?>