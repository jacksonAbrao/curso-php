<?php

$nome = "Jackson";

    for($x = 10; $x > 0; $x--){
        if($x == 3){
            echo "$nome <br>";
            continue;
        }

        echo "testando for $x <br>";
    }