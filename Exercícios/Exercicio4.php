<?php

function descobrirInterruptores($interruptor1, $interruptor2, $interruptor3) {
    echo 'Ligando o primeiro interruptor para observar',PHP_EOL;
    $interruptor1 = true;

    // Alterando os estados das lâmpadas de acordo com o interruptor
    $lampada1 = $interruptor1;
    $lampada2 = $interruptor2;
    $lampada3 = $interruptor3;

    echo "Lâmpada 1: " . ($lampada1 ? "Acesa" : "Apagada") . PHP_EOL;
    echo "Lâmpada 2: " . ($lampada2 ? "Acesa" : "Apagada") . PHP_EOL;
    echo "Lâmpada 3: " . ($lampada3 ? "Acesa" : "Apagada") . PHP_EOL;


    echo PHP_EOL;


    echo 'Ligando o SEGUNDO interruptor para observar',PHP_EOL;
    $interruptor2 = true;
    echo 'DESLIGANDO o primeiro',PHP_EOL;
    $interruptor1 = false;

    $lampada1 = $interruptor1;
    $lampada2 = $interruptor2;
    $lampada3 = $interruptor3;

    echo "Lâmpada 1: " . ($lampada1 ? "Acesa" : "Apagada") . PHP_EOL;
    echo "Lâmpada 2: " . ($lampada2 ? "Acesa" : "Apagada") . PHP_EOL;
    echo "Lâmpada 3: " . ($lampada3 ? "Acesa" : "Apagada") . PHP_EOL;

    echo 'Após essas duas alterações(seriam duas idas na sala), é possível identificar
    o interruptor que corresponde a cada luz';
    
}

// Chamar a função com os interruptores inicializados como desligados
descobrirInterruptores(false, false, false);

?>
