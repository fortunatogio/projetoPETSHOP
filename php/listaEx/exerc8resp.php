<?php

    require_once "cabecario.php";

    $area = $_POST['valor1'];

    $tintaL = $area / 3;
    $latas = ($tintaL/18);
    $total = $latas * 80; 

    echo "A quantidade de lata(s) de tinta necessária(s): $latas<br>";
    echo "Preço total: R$ ".number_format($total, 2, ',', '.');

    require_once "rodape.php";