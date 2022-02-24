<?php

    $x = 0;

    while($x < 10){

        echo "O x é $x <br>";

        if($x === 5){
            echo "terminando o loop <br>";
            break;
        }

        $x++;
    }

    echo "saiu do loop";