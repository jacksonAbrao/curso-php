<?php
    session_start();

    $_SESSION["nome"] = "Jackson";

    if(isset($_SESSION["nome"])){
        $nome = $_SESSION["nome"];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Olá Session</h1>
    <p>
        <?php
            echo $nome;
        ?>
    </p>
</body>
</html>
