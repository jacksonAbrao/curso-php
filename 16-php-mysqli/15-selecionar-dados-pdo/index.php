<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "curso_php";

    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

    $id = 1;
    
    $stmt = $conn->prepare("SELECT * FROM itens WHERE id > :id");

    $stmt->bindParam(":id", $id);

    $stmt->execute();

    // $result = $stmt->fetch(PDO::FETCH_ASSOC);

    // print_r($result);
    echo "<br>";

    $items = $stmt->fetchAll(PDO::FETCH_ASSOC);

    print_r($items);