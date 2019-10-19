<?php
    //Estruturas de seleção
    $idade = 18;
    $N_pessoas = 2;

    if($idade >= 18) echo "Você pode entrar\n";
    else{ 
        if($N_pessoas > 1){
            echo "Você pode entrar".PHP_EOL;
        }else{
            echo "Você não pode entrar\n".PHP_EOL;
        }
    }if($idade>=18 || $N_pessoas>1){//pode ser || ou 'or' / && ou 'and'
            echo "Você pode entrar".PHP_EOL;
    }  else{
        echo "Você não pode entrar".PHP_EOL;
    }

    switch($idade){
        case 18:
            echo "Pode entrar\n";
            break;
        default:
            echo "Não pode entrar\n";
            break;
    }



?>