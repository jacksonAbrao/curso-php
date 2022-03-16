<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "curso_php";

$conn = new mysqli($host, $user, $pass, $db);


$q = "SELECT * FROM itens";

$result = $conn->query($q);

$conn->close();

// um resultado
$itens = $result->fetch_assoc();

// todos os resultados
$itens = $result->fetch_all();

print_r($itens);
