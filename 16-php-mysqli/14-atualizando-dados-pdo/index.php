<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "curso_php";

    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

    $id = 51;
    $nome = "Sofá";
    $descricao = "Sofá de madeira";

    $stmt = $conn->prepare("UPDATE itens SET nome = :nome, descricao = :descricao WHERE id = :id");

    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":descricao", $descricao);
    $stmt->bindParam(":id", $id);

    $stmt->execute();