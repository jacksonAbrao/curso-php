<?php
  $dataA = new DateTime();
  $dataB = new DateTime();

  $dataA->setDate(1999, 02, 14);

  if($dataA > $dataB){
    echo "A data A é maior que a data B";
  } else {
    echo "A data A é menor que a data B";
  }