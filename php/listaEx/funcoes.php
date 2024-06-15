<?php
     
    function exibirData(){
        echo "Hoje é dia ".date("d");
    }

    function somar($n1, $n2){
        return $n1 + $n2;
    }


    function positivoNegativo($v){
        if ($v > 0){
            return "Valor positivo";
        } elseif($v<0){
            return "Valor Negativo";
        } else{
            return "Ihual a zero";
        }
    }

    function menorValor($v, $v1, $v2, $v3, $v4, $v5, $v6, $v7){
        $menorvalor = 999999999999999999999999999999999;
        $pos = 0;

        if ($v<$menorvalor){
            $menorvalor = $v1;
            $pos = 1;
        }
        if ($v2<$menorvalor){
            $menorvalor = $v2;
            $pos = 2;
        }
        if ($v3<$menorvalor){
            $menorvalor = $v3;
            $pos = 3;
        }
        if ($v4<$menorvalor){
            $menorvalor = $v4;
            $pos = 4;
        }
        if ($v5<$menorvalor){
            $menorvalor = $v5;
            $pos = 5;
        }
        if ($v6<$menorvalor){
            $menorvalor = $v6;
            $pos = 6;
        }
        if ($v7<$menorvalor){
            $menorvalor = $v7;
            $pos = 7;
        }

        return array ($menorvalor, $pos);
    }

    function triplo($valor, $valor1){
        if($valor == $valor1) {
            $triple = $valor * 3;
            echo "O resultado é $triple";
        } else {
            $soma = $valor + $valor1;
            echo "O resultado é $soma";
        }
    }
    
        function tabuada($valor){
            for ($i=1;$i<11;$i++) {
                $resultado = $valor * $i;
                echo "$valor x $i = $resultado <p></p>";
            }
        }
    
        function fatorial($valor){
            $resultado = 1;
            for ($i=$valor;$i>0;$i--) {
                $resultado *= $i;
            }
        }
    
        function numerosiguais($valor1, $valor2){
            if ($valor1 > $valor2) {
                echo "$valor2 $valor1";
         }
        
            if ($valor2 > $valor1) {
                echo "$valor1 $valor2";
         }
        
            if ($valor1 == $valor2) {
                echo "Números iguais: $valor1";
         }
        }
    
        function centimetro($valor){
            $resposta = $valor * 100;
            echo "O valor em cm é: $resposta";
        }
    
    
        function tintas($area){
            $tintaL = $area / 3;
            $latas = ($tintaL/18);
            $total = $latas * 80; 
            echo "A quantidade de lata(s) de tinta necessária(s): $latas<br>";
            echo "Preço total: R$ ".number_format($total, 2, ',', '.');
        }
    
        function niver($valor){
            $anoatual = 2024;
            $idade = $anoatual - $valor;
            $dias = $idade * 365;
            $idade2 = 2025 - $valor;
        }
    
        function imc($valor1, $valor2){
            $imc = $valor1 / ($valor2**2);
            echo "o valor do IMC é: $imc";
            echo "<a href='https://www.programasaudefacil.com.br/calculadora-de-imc'> Leia mais </a>";
        }