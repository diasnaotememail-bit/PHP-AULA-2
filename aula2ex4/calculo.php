<?php

    $velocidade = $_GET['velocidade'];
    $limite = $_GET['limite'];

    if($velocide > $limite){
        echo"Gerar multa";
    }

    if($limite > $velocidade){
        echo "Direção segura";
    }

?>