<?php
    require_once "cabecario.php";

    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];

    echo"<p>O valor da soma é: ".somar($valor1, $valor2)." </p>";

    require_once "rodape.php";
