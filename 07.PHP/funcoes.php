<?php

    function sacar(&$conta,$valor){//garantir que irá apenas receber double
        if($valor <= $conta['saldo'] -= $valor)
            $conta['saldo'] -= $valor;
        else
            echo "Saldo insulficiente".PHP_EOL;
        
    }

    function depositar($conta, $valor){
        $conta['saldo'] += valor;
        return $conta;
    }












?>