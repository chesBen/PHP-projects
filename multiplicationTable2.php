<?php
    $num = intval(readline());
    $multiplier = intval(readline());
    $sum = $num * $multiplier;
    if ($multiplier > 10) {
        echo "$num X $multiplier = $sum";
    }
    else{
        for ($i=$multiplier; $i < 11; $i++) { 
            $sum = $num * $i;
            echo "$num X $i = $sum" . PHP_EOL;
        }
    }
?>