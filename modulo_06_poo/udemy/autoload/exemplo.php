<?php

    function __autoload($nomeClasse) {
        require_once("$nomeClasse.php");
        // var_dump($nomeClasse);
    }

    echo "<pre>";
    print_r($carro = new Toyota("Merdes", 1972, 8000));
    echo "</pre>";
    echo $carro->exibir();
    echo ": ";
    $carro->informacao("Toyota", 2012, 1.445);
    echo $carro;

?>