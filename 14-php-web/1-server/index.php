<?php
  print_R($_SERVER);

  echo "<br>";

  echo $_SERVER['SERVER_PORT'] . "<br>";

  if($_SERVER['SERVER_NAME'] == "localhost"){
    echo "You are on localhost <br>";
  }