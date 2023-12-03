<?php

abstract class Animal {
    public function falar() {
        return "Som";
    }
    public function mover() {
        return "anda";
    }
}

class Cao extends Animal {
    public function falar() {
        return "O Cão Late e";
    }
}

class Gato extends Animal {
    public function falar() {
        return "O Gato Mia";
    }
    public function mover() {
        return "E Cuchila";
    }
} 

class Passaro extends Animal {
    public function falar() {
        return "O Passaro Canta um bom " . parent::falar();
    }
    public function mover() {
        return "Voa e " . parent::mover();
    }
}

$animalCao = new Cao();
var_dump($animalCao);
echo "<br>////////////////////<br>";
echo $animalCao->falar();
echo "<br>";
echo $animalCao->mover();
echo "<br>////////////////////<br>";

$animalGato = new Gato();
var_dump($animalGato);
echo "<br>////////////////////<br>";
echo $animalGato->falar();
echo "<br>";
echo $animalGato->mover();
echo "<br>////////////////////<br>";

$animalPassaro = new Passaro();
var_dump($animalPassaro);
echo "<br>////////////////////<br>";
echo $animalPassaro->falar();
echo "<br>";
echo $animalPassaro->mover();
echo "<br>////////////////////<br>";





?>