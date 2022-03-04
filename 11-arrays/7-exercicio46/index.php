<?php
    $arr = [
        [1,2,3,4],
        [4,5,6,5],
        [7,8,9,6]
        
    ];

    for($i = 0; $i < count($arr); $i++){
        echo "imprimindo array externo: " .($i+1) . "<br>";
        for($j = 0; $j < count($arr[$i]); $j++){
            echo $arr[$i][$j] . "<br>";
        }
    }