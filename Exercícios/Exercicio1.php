<?php

    function exercicio1($indice=13){
        $soma=0;
        $k=0;
        do{
            $k=$k+1;
            $soma=$soma+$k;
        }while($k<$indice);
        return $soma;
    }
    
    // O resultado deverá ser 91.
    echo exercicio1();
?>