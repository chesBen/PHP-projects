<?php
    $input = readline();
    if ($input === "USA" || $input === "England") {
        echo "English";
    } else if ($input === "Spain" || $input === "Argentina" || $input === "Mexico") {
        echo "Spanish";
    }
    else {
        echo "unknown";
    }
    
?>