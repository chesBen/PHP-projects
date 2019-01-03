<?php

$sum = 0;
$numbers = explode(' ', readline());
for ($i=count($numbers) - 1; $i >= 0; $i--){
    $sum += $i;
}

echo $sum;