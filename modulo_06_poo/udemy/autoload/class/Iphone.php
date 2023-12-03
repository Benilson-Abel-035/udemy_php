<?php

    require_once('Phone.php');

    class Iphone implements Phone {
        protected $marca;
        protected $versao;
        protected $fabricante;
        protected $anoLancamento;
        public $ligar;
        public $desligar;

        // set
        public function setMarca($m) {
            $this->marca = $m;
        }
        public function setVersao($v) {
            $this->versao = $v;
        }
        public function setFabricante($f) {
            $this->fabricante = $f;
        }
        public function setanoLancamento($an) {
            $this->anoLancamento = $an;
        }
        public function setLigar($l) {
            $this->ligar = $l;
        }
        public function setDesligar($dl) {
            $this->desligar = $dl;
        }
        // get
        protected function getMarca() {
            return $this->marca;
        }
        protected function getVersao() {
            return $this->versao;
        }
        protected function getFabricante() {
            return $this->fabricante;
        }
        protected function getanoLancamento() {
            return $this->anoLancamento;
        }
        public function getLigar() {
            return $this->ligar;
        }
        public function getDesligar() {
            return $this->desligar;
        }

        // methods construtor
        
        public function __construct($m, $v, $f, $an, $l, $dl){
            $this->setMarca($m);
            $this->setVersao($v);
            $this->setFabricante($f);
            $this->setanoLancamento($an);
            $this->setLigar($l);
            $this->setDesligar($dl);
        }

        public function __toString() {
            return "O telefone " .$this->getMarca(). " versão " .$this->getVersao(). " o seu fabricante é " 
                    .$this->getFabricante(). " e foi lançada no ano " .$this->getanoLancamento(). ".";
        }
        
            public function Camera(){
                if ($this->getLigar()) {
                    echo "Ligar camera";
                }
                else {
                    echo "Camera desligada.";   
                }
            }
            public function Memoria($memoria){
                if ($this->getLigar()) {
                    echo "Exibir memoria " .$memoria. "GB.";
                }else {
                    echo "Não é possível exibir informações de memória";   
                }
            }
            public function Sistema($sistema){
                if ($this->getLigar()) {
                    echo "Versão do sistema " .$this->getVersao(). ".";
                }else {
                    echo "Não é possível exibir informações do sistema";   
                }
            } 

    }
?>