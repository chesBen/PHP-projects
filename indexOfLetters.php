<?php

$word = strtolower(readline());
$alphabet = "abcdefghijklmnopqrstuvwxyz";

for ($i=0; $i < strlen($word); $i++) { 
    echo $word[$i] . " -> " . strpos($alphabet, $word[$i]) . PHP_EOL;
}