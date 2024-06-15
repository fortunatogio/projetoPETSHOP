<?php

    require_once "cabecario.php";

    $valor1 = $_POST['valor1'];

    $resposta = $valor1 * 100;

    echo "O valor em cm é: $resposta";
    
    require_once "rodape.php";