<?php
  $data = new DateTime();

  echo $data->format('d/m/Y') . "<br>";
  echo $data->format('d - M - Y') . "<br>";

  $data->modify('+5 days');

  echo $data->format('d/m/Y') . "<br>";

  $data->modify('+5 months');

  echo $data->format('d/m/Y') . "<br>";

  $data->modify('+5 years');

  echo $data->format('d/m/Y') . "<br>";