<?php
    //Exibe valor
    //echo "Hello Wolrd\n";

    //tipos de dados
    $texto = 'a';
    $nome = "Danilo Alves";
    $numero = 20;
    $temperatura = 2.5;
    $verifica = true;//ou false

    //Operações matemática
    $n1 = 20;
    $n2 = 5;
    $soma = $n1 + $n2;
    $div = $n1/$n2;
    $mult = $n1 * $n2;
    $sub = $n1 - $n2;
    $pot = $n1 ** $n2;
    $resto = $n1 % $n2;

    echo gettype($verifica).PHP_EOL;
    echo "\n".PHP_EOL;

    //Diferença entre "" e ''
    echo 'Aula de \n Tec Web'.PHP_EOL;
    echo "\n";
    echo "\tAula de Tec Web\n";    

    //Concatenando
    $s1 = 'Universidade';
    $s2 = ' Federal';
    $s3 = $s1 . $s2;
    echo $s3."\n";

    echo 'A soma é '.$soma."\n";
    

?>