<?php
    $str = "carro - navio - helicóptero - barco - jangada";
    
    $str1 = explode("-", $str);

    
    for($i = 0; $i < count($str1); $i++){
        echo "item: " . $str1[$i] . "<br>";
    }
