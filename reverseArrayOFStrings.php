<?php
$numbers = explode(' ', readline());

for ($i=count($numbers) - 1; $i >= 0; $i--) { 
    echo $numbers[$i] . " ";
}   