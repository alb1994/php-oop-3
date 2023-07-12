<?php 
    class Allegato{
        private $nome;
        private $tipo;
        private $dimensione;
        public function __construct(String $nome, String $tipo, float $dimensione){
            $this->nome = $nome;
            $this->tipo = $tipo;
            $this->dimensione = $dimensione;
        }
        public function setnome($nome){
            $this-> nome = $nome;
        }
        public function getnome(){
            return $this->nome;
        }
        public function settipo($tipo){
            $this-> tipo = $tipo;
        }
        public function gettipo(){
            return $this->tipo;
        }
        public function setdimensione($dimensione){
            $this-> dimensione = $dimensione;
        }
        public function getdimensione(){
            return $this->dimensione;
        }
    }
?>