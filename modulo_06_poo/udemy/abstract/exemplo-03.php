<?php 

    abstract class Banco {

        public $numeroConta;
        protected $nome;
        private $codigoSeguranca;

        // set 
        public function setnumeroConta($numero) {
            $this->numeroConta = $numero;
        }
        public function setNome($nome) {
            $this->nome =  $nome;
        }
        public function setcodigoSeguranca($codigoSeguranca) {
            $this->codigoSeguranca = $codigoSeguranca;
        }
        // get

        public function getnumeroConta() {
           return $this->numeroConta;
        }
        public function getNome() {
            return $this->nome;
         }
        public function getcodigoSeguranca() {
            return $this->codigoSeguranca;
         }
         
        public function __construct() {
            $this->setnumeroConta(false);
            $this->setNome(false);
            $this->setcodigoSeguranca(false);
        }

        public function CriarConta($nome, $numeroC, $codigo) {
            $this->setNome($nome);
            $this->setnumeroConta($numeroC);
            $this->setcodigoSeguranca($codigo);
        }
        public function Depositar() {
            # code...
        }
        public function Sacar(){
            # code...
        }
        public function PagarMensal() {

        }
        public function FecharConta() {

        }

    }

    class Cliente extends Banco {
        public function __toString(){

            return "O cliente " .$this->getNome(). " abrir a conta com o número " .$this->getnumeroConta(). " e sua senha é " . $this->getcodigoSeguranca() . ".";

        }
    }

    $banco = new Cliente();
    $banco->CriarConta("Benilson Abel", 937513045, "123*******55");
    var_dump($banco);
    echo "<br>";
    echo $banco;
?>