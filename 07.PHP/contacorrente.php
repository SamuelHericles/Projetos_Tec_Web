<?php
    //Criar Classe
    class ContaCorrente{
       private $cpf;
       private $agencia;
       private $numero;
       private $nome;
       private $saldo;

       //Método Construtor 
       public function __construct($nome,$agencia,$cpf,$numero,$saldo){
            $this->nome = $nome;
            $this->agencia = $agencia;
            $this->cpf = $cpf;
            $this->numero = $numero;
            $this->saldo = $saldo;
       }

       public function sacar($valor){
           if($this->saldo >= $valor){
              $this->saldo -= $valor;
              return $this;
        }
           else{
               echo "Saldo insulficiente<br>";
           }
           return $this;
       }

       public function depositar($valor){
           $this->saldo += $valor;
           return $this;
       }
       /*
       public function getSaldo(){
           return $this->saldo;
       }
       
       public function getNome(){
           return $this->nome;
       }
   
       public function getcpf(){
           return $this->cpf;
       }
       public function getAgencia(){
           return $this->agencia;
       }
       
       public function getNumero(){
           return $this->numero;
       }
       */

       //método mágico get
       public function __get($atributo){
           if($atributo == 'cpf'){
               echo "Não permitido";
            }
           else{
              return $this->$atributo;
           }
       }

       public function __set($atributo,$valor){
           $this->$atributo = $valor;
       }



    }
?>