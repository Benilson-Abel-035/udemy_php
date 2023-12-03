<?php

    function incluirClasses($nomeClasses) {
        if (file_exists($nomeClasses.".php") === true) {
            require_once($nomeClasses.".php");
        }
    }

    spl_autoload_register("incluirClasses");
    spl_autoload_register(function($nomeClasses) {
        if(file_exists("class" . DIRECTORY_SEPARATOR. $nomeClasses.".php") === true) {
            require_once("class" . DIRECTORY_SEPARATOR . $nomeClasses.".php");
        }
    });

    echo "<hr>";
    $phone = new Iphone("", "", "", "", false, false);
    $phone->setMarca("ITEL");
    $phone->setVersao(9);
    $phone->setFabricante("ITEL");
    $phone->setanoLancamento(1999);
    $phone->setLigar(true);
    $phone->setDesligar(false);
    echo $phone;
    echo "<br>";
    echo "<br>";
    echo "<b>Dados do Telefone:</b><br>";
    echo $phone->Camera();
    echo "<br>";
    echo $phone->Memoria("32");
    echo "<br>";
    echo $phone->Sistema("10");
    echo "<br>";
    echo "<br>";

        echo "<hr>";
        echo "<pre>";
        print_r($phone);
        echo "</pre>";
    
?>