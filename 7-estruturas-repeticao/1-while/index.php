<?php

    $x = 0;//definição do contador
    
    while($x < 10) {//definição da estrutura
        echo $x . "<br>";//corpo do loop

        $x++;//incremento do contador
    }

    echo "continuando código <br>";

    $y = 0;//definição do contador
    
    while($y <= 10) {//definição da estrutura
        echo $y . "<br>";//corpo do loop

        $y += 2;//incremento do contador
    }

    echo "continuando código <br>";

    $z = 10;//definição do contador
    
    while($z > 0) {//definição da estrutura
        echo $z . "<br>";//corpo do loop

        $z -- ;//incremento do contador
    }

    echo "continuando código <br>";

    $z = 10;//definição do contador
    
    while($z > 0) {//definição da estrutura
        if($z % 2 != 0){
            echo $z . "<br>";//corpo do loop
        }

        $z -- ;//incremento do contador
    }

    echo "continuando código <br>";