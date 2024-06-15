<?php

    require_once "cabecario.php";

    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];

    $imc = $valor1 / ($valor2**2);
    echo "o valor do IMC é: $imc";
    echo "<a href='https://www.programasaudefacil.com.br/calculadora-de-imc'> Leia mais </a>";

    require_once "rodape.php";