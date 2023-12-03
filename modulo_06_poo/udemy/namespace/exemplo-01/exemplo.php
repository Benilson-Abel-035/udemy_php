<?php

    require_once("clientes/produtos.php");
    require_once("produtos/produtos.php");

    use \exemplo\Produtos as Dando_Outro_Nome_para_Classe_pelo_nameSpace;
    $produtos = new Dando_Outro_Nome_para_Classe_pelo_nameSpace();
    echo $produtos->mostarDetalhes();

        echo "<br>";
    use \exemplo2\Produtos;

    $produtos = new Produtos();
    echo $produtos->mostarDetalhes();

?>