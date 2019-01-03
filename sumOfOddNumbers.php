<?php
    $number = intval(readline());
    $sum = 0;
    for ($i=1; $i < $number * 2; $i+=2) { 
        echo $i . PHP_EOL;
        $sum += $i;
    }
    echo "Sum: $sum";
?>