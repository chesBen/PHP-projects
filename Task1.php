<?php

$numbers = explode(',', intval(readline()));

$first = array_shift($numbers);

for ($i=count($numbers) - 1; $i >=0 ; $i--) { 
    
    echo $numbers[$i] . ',';
}


echo $first;