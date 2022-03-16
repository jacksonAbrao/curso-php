<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "curso_php";

    $con = new mysqli($host, $user, $pass, $db);

    // $q = "CREATE TABLE teste (nome VARCHAR(100), sobrenome VARCHAR(100), idade INT)";
    $q = "DROP TABLE teste";

    $con->query($q);

    $con->close();