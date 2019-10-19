<?php
    //importar um arquivo
    //include 'funcroes.php';
    //require 'funco4es.php';
    require_once 'funcoes.php';

    //Lista
    /*
    $lista = array(1,4,3,5,6,7);
    $lista = [1,3,5,7,9];
    $lista[0] = 3;
    unset($lista[0]);
    $lista[1] = NULL;
    */

    /*
        foreach($lista as $key=>$valor){
            echo $lista[$key]."\n";
        }
    */

    //Lista Associativas
    $lista2 = [
        '202.202.676-86' => ["Danilo",24,67.7],
        '202.456.676-99' => ["Geroniomo,ele eh alto",21,120],
        '202.202.676-12' => ["Herleyson-som",22,69]
    ];

    /*
        $lista3 = [
            'A' => 1,
            'B' => 2,
            'C' => 3
        ];
        echo $lista3['B'].PHP_EOL;
    */

    /*
    $lsita3 = [
        1.4 => 'Danilo',
        1 => 'João',
       true => Silva//não façam isso
    ]
    */

    $contas = [
        '202.202.676-86' => ['nome' => 'Danilo'   , 'saldo' => 200],
        '202.456.676-99' => ['nome' => 'Herleyson', 'saldo' => 600],
        '202.202.676-12' => ['nome' => 'Geronio'  , 'saldo' => 800]
    ];

    //saque
    //var_dump($contas);//serve para vizualizaer uma estrutura
    //$contas['202.202.676-12']['saldo'];
    sacar($contas['202.202.676-12'],900);
    echo "saldo = ".$contas['202.202.676-12']['saldo'].PHP_EOL;



?>