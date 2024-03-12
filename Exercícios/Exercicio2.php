<?php
    function calculaFibo($n){
        $aux1 = 0;
        $aux2 = 1;
        if(is_numeric($n)){
            for($i=2;$i <= $n;$i++){
                $result = $aux1 + $aux2;
                $aux1=$aux2;
                $aux2=$result;
             }
        }else{
            echo 'Digite um número válido, por favor';
        }
        return $result;
    }

    $valor= readline('Digite um valor para calcular a sequência de Fibonacci: ');
    echo "Número da sequencia de Fibonacci: ", calculaFibo($valor);
?>