<?php

    require_once "cabecario.php";

    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];

    if ($valor1 > $valor2) {
        echo "$valor2 $valor1";
 }

    if ($valor2 > $valor1) {
        echo "$valor1 $valor2";
 }

    if ($valor1 == $valor2) {
        echo "Números iguais: $valor1";
 }
   
    require_once "rodape.php";