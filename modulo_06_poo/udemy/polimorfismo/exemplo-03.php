<?php

    abstract class Cadastro {
        private $nome = "Benilson Abel";
        private $telefone = "937513045";
        private $email = "benilsonabel@gmail";
        private $senha = 'Filomena';

        public function cadastrarFuncionarios() {
            echo "Funcionario cadastrado";
        }
        public function cadastrarClientes(){
            echo "Ciente cadastrado";
        }
        public  function cadastrarProtudos(){
            echo "Produto cadastrado";
        }
    }
    class Funcionarios extends Cadastro {

        public function cadastrarFuncionarios() {
            return parent::cadastrarFuncionarios();
        }
    }
    class Clientes extends Cadastro {
        public function cadastrarClientes() {
            return parent::cadastrarClientes();
        }
    }
    class Produtos extends Cadastro {
        public function cadastrarProtudos() {
            return parent::cadastrarProtudos();
        }
    }

$functionarios = new Funcionarios();
echo "<pre>";
var_dump($functionarios);
echo "<br>";
print_r($functionarios->cadastrarFuncionarios());
echo "<hr>";

$clientes = new Clientes();
echo "<pre>";
var_dump($clientes);
echo "<br>";
print_r($clientes->cadastrarClientes());
echo "<hr>";
echo "</pre>";

$produtos = new Produtos();
echo "<pre>";
var_dump($produtos);
echo "<br>";
print_r($produtos->cadastrarProtudos());
echo "<hr>";
?>