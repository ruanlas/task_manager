<?php
    class Task{
        private $id;
        private $nome;
        private $descricao;
        private $userId;
        private $arquivo;

        public function setId($id){
            $this->id = $id;
        }
        public function setNome($nome){
            $this->nome = $nome;
        }
        public function setDescricao($descricao){
            $this->descricao = $descricao;
        }
        public function setArquivo($arquivo){
            $this->arquivo = $arquivo;
        }
        public function setUserId($userId){
            $this->userId = $userId;
        }
        public function getUserId(){
            return $this->userId;
        }
        public function getId(){
            return $this->id;
        }
        public function getNome(){
            return $this->nome;
        }
        public function getDescricao(){
            return $this->descricao;
        }
        public function getArquivo(){
            return $this->arquivo;
        }
    }
?>