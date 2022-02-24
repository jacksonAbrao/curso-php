<?php
    function number($numero){
        if(($numero % 2) == 0){
            echo "O número $numero é par <br>";
        } else {
            echo "O número $numero é impar <br>";
        }
    }

    number(3);
    number(4);
