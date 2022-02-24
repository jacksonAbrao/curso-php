<?php

    $arr = array();
    $tamanho = 10;
    
    for ($i=1; $i <= $tamanho; $i++) { 
        $arr[] = $i;    
    }

    for($i = 0; $i < count($arr); $i++){
        if(($arr[$i]%2) == 0){
            echo "imprimindo número $arr[$i] por ser par <br>";
        }
    }

    echo '<br><br>';

    // foreach($arr as $value) {
    //     if (($value % 2) == 0) {
    //         echo "imprimindo número $value por ser par <br>";
    //     }
    // }

    // echo '<br><br>';

    // $cont = 0;

    // while($cont < count($arr)) {
    //     if (($arr[$cont] % 2) == 0) {
    //         echo "imprimindo número $arr[$cont] por ser par <br>";
    //     }

    //     $cont++;
    // }
