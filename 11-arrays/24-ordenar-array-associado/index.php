<?php
    $arr = [
        'Jackson' => 23,
        'Felipe' => 22,
        'João' => 34
    ];

    asort($arr);

    print_r($arr);
    echo "<br>";

    arsort($arr);
    
    print_r($arr);
    echo "<br>";

    ksort($arr);
    
    print_r($arr);
    echo "<br>";

    krsort($arr);

    print_r($arr);