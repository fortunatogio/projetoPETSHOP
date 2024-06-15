
<?php

    require_once "cabecario.php";
        $valor1 = $_POST['valor1'];
        $valor2 = $_POST['valor2'];

        if($valor1 == $valor2) {
            $triple = $valor1 * 3;
            echo "O resultado é $triple";
        } else {
            $soma = $valor1 + $valor2;
            echo "O resultado é $soma";
        }
    
    require_once "rodape.php";