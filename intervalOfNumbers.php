<?php
    $firstNum = 10;
    $secondNum = 5;

    if ($firstNum > $secondNum){
        for ($i=$secondNum; $i <= $firstNum; $i++) { 
            echo $i . PHP_EOL;
            
        }
    }
    else {
        for ($i=$firstNum; $i <= $secondNum; $i++) { 
            echo $i . PHP_EOL;
            
        }
    }
?>