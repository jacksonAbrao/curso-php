<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "curso_php";

    $con = new mysqli($host, $user, $pass, $db);

    if($con->connect_error){
        echo "Erro: " . $con->connect_error;
    }