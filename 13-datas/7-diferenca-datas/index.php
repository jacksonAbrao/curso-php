<?php
  $dataA = new DateTime();
  $dataB = new DateTime();

  $dataA->setDate(1999, 02, 14);

  echo $dataA->format('d/m/Y') . "<br>";
  echo $dataB->format('d/m/Y') . "<br>";

  $diferenca = $dataA->diff($dataB);

  print_r($diferenca);
  echo "<br>";