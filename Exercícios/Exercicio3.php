<?php

echo desenharLinha();
function desenharLinha() {
    echo PHP_EOL,str_repeat( '-', 20 ), PHP_EOL;
}

    function logica1($n){
        $aux1 = 1;
        for($i=0;$i < $n;$i++){
           $result = $aux1 + 2;
           $aux1=$result;
        }
        return $result;
        
    }
    echo 'Execício a -', PHP_EOL, 'Resultado posição 5: ', logica1(5-1);
    
    echo desenharLinha();

    function logica2($n){
        $aux1 = 2;
        for($i=0;$i < $n;$i++){
           $result = $aux1 * 2;
           $aux1=$result;
        }
        return $result;
    }
    echo 'Exercício b: ',PHP_EOL,'Resultado da posição 7: ', logica2(7-1);

    echo desenharLinha();

    function logica3($n){
        $aux1 = 0;
        if($n==0){
            return 0;
        }else{
            for($i=0;$i < $n;$i++){
                $result = pow($aux1,2);
                $aux1++;
             }
        }
        
        return $result;
    }
    echo 'Exercício c: ',PHP_EOL,'Resultado da posição 8: ', logica3(8);

    echo desenharLinha();

    function logica4($n){
        $aux1 = 2;
            for($i=0;$i < $n;$i++){
                $result = pow($aux1,2);
                $aux1+=2;
             }
        
        return $result;
    }
    echo 'Exercício d: ',PHP_EOL,'Resultado da posição 5: ', logica4(5);

    echo desenharLinha();

    function logica5($n){
        $aux1 = 1;
        $aux2 = 1;
        if($n == 0){
            return 'Não foi possível continuar lógica com a posição 0';
        }else{
            for($i=2;$i <= $n;$i++){
                $result = $aux1 + $aux2;
                $aux1=$aux2;
                $aux2=$result;
             }
        }
        
        return $result;
    }
    echo 'Exercício e: ',PHP_EOL,'Resultado da posição 7: ', logica5(6);

    echo desenharLinha();
    
    function comecaComD($numero) {
        $numeroString = (string)$numero;
        if($numeroString[0]=== 'D'){
            return 'true';
        } 
    }
    function logica6($n){
        $x[]='';
        $num=0;
        for($i=0;$i < $n;$i++){
            $num++;
            $numeroString = strval($num);
            if($numeroString[0] === 'D'){
                $x[]=$num;
            } 
         }

        foreach ($x as $valor) {
                echo $valor . "\n";
        }
        

    }
    echo 'Exercício f: ',PHP_EOL,'Resultado da posição 8: ', logica6(2);

    echo desenharLinha();

?>