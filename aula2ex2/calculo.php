<?php

    $capital = $_GET['capital'];
    $taxa = $_GET['taxa'] / 100;
    $tempo = $_GET['tempo'];

    $resultado = $capital * $taxa * $tempo;

    echo "Seu juros é de R$", $resultado;

?>