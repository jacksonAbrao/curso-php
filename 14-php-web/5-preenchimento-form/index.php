<?php
  $usuario = [
    'nome' => 'João',
    'idade' => 20,
    'profissao' => 'estudante'
  ];

  if($usuario){
    $nome = $usuario['nome'];
    $idade = $usuario['idade'];
    $profissao = $usuario['profissao'];
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
    <form action="">
      <div>
        <input type="text" name="nome" placeholder="Digite seu nome" value="<?= $nome ?>">
      </div>
      <div>
        <input type="text" name="idade" placeholder="Digite sua idade" value="<?= $idade ?>">
      </div>
      <div>
        <input type="text" name="profissao" placeholder="Digite sua profissão" value="<?= $profissao ?>">
      </div>
      <div>
        <button type="submit">Enviar</button>
      </div>
    </form>
  </body>
  </html>