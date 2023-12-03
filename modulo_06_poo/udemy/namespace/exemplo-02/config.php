<?php

spl_autoload_register(function($nomeClsses){
    
    var_dump($nomeClsses);

    $dirClasses = "classes";
    $filename = $dirClasses . DIRECTORY_SEPARATOR . $nomeClsses . ".php";

    if(file_exists($filename)) {
        require_once($filename);
    }

});




?>