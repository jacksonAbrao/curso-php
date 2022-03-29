<?php

    $db_name = "moviestar";
    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";

    $conn = new PDO("mysql:dbname=$db_name;host=$db_host", $db_user, $db_pass);
    $conn->exec("SET NAMES 'utf8'");
    $conn->exec("SET character_set_connection=utf8");
    $conn->exec("SET character_set_client=utf8");
    $conn->exec("SET character_set_results=utf8");

    //Habilitar erros PDO
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);