<?php
    class Categoria{
        private $id;
        private $nome;

        public function getId(){
            return $this->id;
        }
        public function setId($id){
            $this->id = $id;
        }

        public function getNome(){
            return $this->nome;
        }
        public function setNome($nome){
            $this->nome = $nome;
        }
        //lista os dados do banco
        public function listar(){
            $conexao = new PDO('mysql:host=127.0.0.1:3306;dbname=estoque','root','123');
            $query = "SELECT * FROM categorias";
            $lista_sql = $conexao->query($query);
            $lista = $lista_sql->fetchAll();//converte para lista php
            return $lista;
        }
    }

?>