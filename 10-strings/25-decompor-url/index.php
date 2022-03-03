<?php
    $url = "https://www.google.com";

    $arrayurl = parse_url($url);

    print_r($arrayurl);

    echo "<br>";

    echo $arrayurl["host"];

    echo "<br>";

    $url2 = "http://www.google.com/search?q=teste";

    $arrayurl2 = parse_url($url2);

    print_r($arrayurl2);

    echo "<br>";

    echo $arrayurl2["host"];