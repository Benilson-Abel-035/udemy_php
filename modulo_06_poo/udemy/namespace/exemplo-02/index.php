 <?php

    require_once("config.php");

    use ClienteCompra\Cadastro;

    $cad =  new Cadastro();
    $cad->setNome("Benilson Abel");
    $cad->setEmail("benilsonabel@mgail.com");
    $cad->setSenha("Lávida</Programador>");
    echo "<pre>";
    echo $cad->registrarVenda();
    echo "<pre>";

?>