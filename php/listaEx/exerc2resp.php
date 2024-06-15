<?php

    require_once "cabecario.php";

     
    $v = $_POST['valor'];
    $v1 = $_POST['valor1'];
    $v2 = $_POST['valor2'];
    $v3 = $_POST['valor3'];
    $v4 = $_POST['valor4'];
    $v5 = $_POST['valor5'];
    $v6 = $_POST['valor6'];
    $v7 = $_POST['valor7'];


   $valores = menorValor($v, $v1, $v2, $v3, $v4, $v5, $v6, $v7);

    echo "<p>Menor valor: $valores[0]</p>";
    echo "<p>Posição de entrada: $valores[1]</p>";
    
    require_once "rodape.php";