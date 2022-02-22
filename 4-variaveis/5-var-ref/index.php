<?php

    $a = 47;
    $b =& $a;

    echo $a;
    echo "<br>";
    echo $b;

    $b = 32;
    
    echo "<br>"; 
    echo $a;
    echo "<br>";
    echo $b;
?>