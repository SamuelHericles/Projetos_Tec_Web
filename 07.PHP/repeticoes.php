<?php
    //Estruturas de repetição
    $cont = 0;
    while($cont<10){
        echo "$cont".PHP_EOL;
        $cont++;
    }

    //for
    for($i = 0; $i<10; $i++){
        echo "$i".PHP_EOL;
    }
    $vetor = [1,2,3,4,6,7,6,6,6];

    echo "\ntamanho = ".count($vetor).PHP_EOL;

    //foreach
    foreach($vetor as $valor){
        if($valor == 5){
            //break;
            continue;
        }
        echo $valor.PHP_EOL;
    }

    echo "\n";

    foreach($vetor as $num => $valor){
        echo $num."=>".$valor.PHP_EOL;

    }




?>