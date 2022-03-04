<?php

    //criando tabela com dados da pessoa
    $pessoas = [
        "Jackson" => 23,
        "Wylker" => 29,
        "João" => 20,
    ];

?>

<table>
    <tr>
        <th>Nome</th>
        <th>Idade</th>
    </tr>
    <?php foreach($pessoas as $nome => $idade): ?>
    <tr>
        <td><?= $nome; ?></td>
        <td><?= $idade; ?></td>
    </tr>
    <?php endforeach; ?>
</table>
