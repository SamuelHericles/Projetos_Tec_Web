<?php

   include 'ContaCorrente.php';

   $contaDanilo = new ContaCorrente('Danilo Alves','7878-9','898.898.888-88','6765-3',800.0);
   $contaJoao = new ContaCorrente('João do Silva','7879-9','898.898.888-89','6765-4',900.0);

   //$contaDanilo->sacar(100)->depositar(100);

   //$contaDanilo->nome = "Danilo";

   //echo "Nome:".$contaDanilo->getNome();
   //echo "Saldo:".$contaDanilo->sacar(100)->depositar(1000)->saldo;

   echo "-->Cpf:".$contaDanilo->cpf;

   //var_dump($contaDanilo->sacar(100)->depositar(100));

   ?>