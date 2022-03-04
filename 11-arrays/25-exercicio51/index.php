<?php
    $arr = [
        'Jackson' => 23,
        'Felipe' => 22,
        'João' => 34,
        'Maria' => 18,
        'José' => 32,
        'Lucas' => 24,
        'Pedro' => 21,
    ];

    ksort($arr);
?>
<ul>
    <?php foreach($arr as $key => $value): ?>
        <li><?= $key . ': ' . $value ?></li>
    <?php endforeach; ?>
</ul>

