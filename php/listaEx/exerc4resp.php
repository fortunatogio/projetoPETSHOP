<?php

    require_once "cabecario.php";

    $valor = $_POST['valor'];

    for ($i=1;$i<11;$i++) {
        $resultado = $valor * $i;
        echo "$valor x $i = $resultado";
    }
    
    require_once "rodape.php";