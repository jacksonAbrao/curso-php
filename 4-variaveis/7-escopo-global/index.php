<?php
    
    $teste = "asd";

    echo "$teste global 1 <br>";

    if(true){
        $teste = "asdasd";
        echo "$teste if <br>";
    }

    echo "$teste global 2 <br>";

    function teste(){
        $teste = "xs";
        echo "$teste global <br>";
    }

    teste();

    function teste2(){
        global $teste;
        $teste = "asdasd";
        echo "$teste global 2 <br>";
    }

    teste2();

?>