<?php
    $num = intval(readline());
    for ($i=1; $i < 11; $i++) { 
        $sum = $num * $i;
        echo "$num X $i = $sum" . PHP_EOL;
    }
?>