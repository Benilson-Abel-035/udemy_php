<?php

    namespace ClienteCompra;

    class Cadastro extends \Cadastro {

            private $produto;

            // set 
            public function setProduto($produto){
                $this->produto = $produto; 
            }
            // get
            

        public function registrarVenda() {
        return "Foi registrada uma venda para o cliente " . $this->getNome();
    }
}

?>