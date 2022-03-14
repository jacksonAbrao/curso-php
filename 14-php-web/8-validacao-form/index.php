<?php
  $validacoes = [];

  if(count($_POST)>0){

    if(!isset($_POST['nome']) || $_POST['nome'] == ''){
      $validacoes[] = 'Nome é obrigatório';
    }

    if(!isset($_POST['email']) || $_POST['email'] == ''){
      $validacoes[] = 'Email é obrigatório';
    }

    if($_POST['senha'] != $_POST['confirmacao']){
      $validacoes[] = 'Senhas não conferem';
    }
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
  <?php if(count($validacoes)>0): ?>
    <ul>
      <?php foreach($validacoes as $validacao): ?>
        <li><?= $validacao; ?></li>
      <?php endforeach; ?>
    </ul>
  <?php endif; ?>
  <form action="index.php" method="post">
    <div>
      <input type="text" name="nome" placeholder="Digite o seu nome">
    </div>
    <div>
      <input type="text" name="email" placeholder="Digite o seu e=mail">
    </div>
    <div>
      <input type="password" name="senha" placeholder="Digite a sua senha">
    </div>
    <div>
      <input type="password" name="confirmacao" placeholder="Confirme a sua senha">
    </div>
    <div>
      <input type="submit" value="Enviar">
    </div>
  </form>
</body>
</html>