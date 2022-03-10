<?php
  $cincodias = strtotime("5 days");

  echo $cincodias . "<br>";

  $dataAtualMais5 = date('d/m/Y', $cincodias);

  echo $dataAtualMais5;

  $doisMeses = strtotime("2 months");

  echo "<br>" . $doisMeses;

  $dataAtualMais2Meses = date('d/m/Y', $doisMeses);

  echo "<br>" . $dataAtualMais2Meses;