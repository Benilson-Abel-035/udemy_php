<?php

   abstract class Automovel {
       
        // methods
        public function acelerar($ac) {
                return "O carro acelrou " .$ac. " km/h";
        }

        public function travar($ac) {
            return "E parou em " .$ac. " km/h.";
        }

        public function mudarFacha($mf, $ac) {
            return "e mudou de facha " .$mf. " a " .$ac. " km/h";
        }
   } 

   class Toyota extends Automovel {

        public $nome;

        //    get
        public function getNome() {
                return $this->nome;
            }
        //    set
        public function setNome($n) {
                $this->nome = $n;
            }
        public function __construct($n) {
                $this->setNome($n);
        }

        public function acelerar($ac) {
        return "O carro " .$this->nome. " acelrou " .$ac. " km/h" . ". " . 
                parent::travar(1000);
       }

       public function travar($ac) {

       }
       public function mudarFacha($mf, $ac) {

       }        
   }

   class Mercedes extends Automovel {
        public $nome;

        //    get
        public function getNome() {
                return $this->nome;
            }
        //    set
        public function setNome($n) {
                $this->nome = $n;
            }
        public function __construct($n) {
            $this->setNome($n);
        }
        public function acelerar($ac) {
            return "O carro " .$this->nome. " acelrou " .$ac. " km/h";
        }

        public function travar($ac) {

        }
        public function mudarFacha($mf, $ac) {

        }        
   }

   class Porcher extends Automovel {
        public $nome;

        //    get
        public function getNome() {
                return $this->nome;
            }
        //    set
        public function setNome($n) {
                $this->nome = $n;
            }
        public function __construct($n) {
            $this->setNome($n);
        }
        public function acelerar($ac) {
            return "O carro " .$this->nome. " acelrou " .$ac. " km/h " . parent::mudarFacha(1, 100000);   
        }
        public function travar($ac) {

        }
        public function mudarFacha($mf, $ac) {

        }        
}

$carro = new Toyota("Toyota");
echo "<pre>";
var_dump($carro);
echo "<br>";
print_r($carro->acelerar(100));
$carro->setNome("Toyota");
echo "<hr>";

$carro1 = new Mercedes("Mercedes");
echo "<pre>";
var_dump($carro1);
echo "<br>";
print_r($carro1->acelerar(100));
echo "<hr>";
echo "</pre>";

$carro2 = new Porcher("Porcher");
echo "<pre>";
var_dump($carro2);
echo "<br>";
print_r($carro2->acelerar(5000));
echo "<hr>";
?>