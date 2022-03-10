<?php
  $dataNascimento = mktime(02, 12, 33, 02, 14, 1999);

  echo $dataNascimento . "<br>";

  $dataNascimentoFormatada = date('d/m/Y', $dataNascimento);

  echo $dataNascimentoFormatada . "<br>";