<?php
    // definindo a class
    class Pessoa {
        // declarando constamte;
        const nomeDonoSistema = "FR4NCK13";
        const nomeClients = "Julho Barros";
        const nome = "Jeremias M. Abel";
        public function mostrarDados() {
            // referenciando a constante pelo method self::
            return "O nome de meu cliente é " . self::nomeClients;
        }
    }
    class Funcionario extends Pessoa {
        // declarando constamte;
        const nome = "Têcnico de IT";
        public function mostrarDados() {
            // referenciando a constante pelo method parent::
            return "O dono do sistema é " . parent::nomeDonoSistema . " e ele é o " . parent::nome . ", " . self::nome . ".<br>" . parent::mostrarDados() . ".";
        }  
    }

    $p = new Funcionario();
    echo $p->mostrarDados();

?>