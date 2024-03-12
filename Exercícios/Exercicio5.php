<?php

    // Função para inverter
    function inverterString($str){
        $tam=strlen($str);
        $inverso='';
        
        for($i=$tam-1;$i>=0;$i--){
            $inverso.=$str[$i];
        }
        return $inverso;
    }

    $strOriginal= readline('Digite uma palavra para inverter: ');
    PHP_EOL;
    echo 'String original: ', $strOriginal,PHP_EOL;

    echo 'String invertida: ',inverterString($strOriginal);
    
?>