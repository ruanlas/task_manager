<?php
    class User{
        private $id;
        private $nome;
        private $email;
        private $senha;
        private $dataNascimento;

        public function setId($id){
            $this->id = $id;
        }
        public function setNome($nome){
            $this->nome = $nome;
        }
        public function setEmail($email){
            $this->email = $email;
        }
        public function setDataNascimento($dataNascimento){
            $this->dataNascimento = $dataNascimento;
        }
        public function setSenha($senha){
            $this->senha = $senha;
        }
        public function getSenha(){
            return $this->senha;
        }
        public function getId(){
            return $this->id;
        }
        public function getNome(){
            return $this->nome;
        }
        public function getEmail(){
            return $this->email;
        }
        public function getDataNascimento(){
            return $this->dataNascimento;
        }
    }
?>