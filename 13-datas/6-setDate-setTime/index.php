<?php
  $data = new DateTime();

  print_r($data);
  echo "<br>";

  $data->setDate(1999, 02, 14);

  echo $data->format('d/m/Y') . "<br>";

  $data->setTime(12, 30, 00);

  echo $data->format('d/m/Y H:i:s');