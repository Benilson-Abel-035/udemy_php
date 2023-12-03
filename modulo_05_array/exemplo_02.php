<pre>
<?php

echo "Fixando array";

// Carros;
$carros[0][0] = "Toyota";
$carros[0][1] = "Jundai";
$carros[0][2] = "Porcher";
$carros[0][3] = "Mercedes";
$carros[0][4] = "Camoro";
// Jogos;
$jogos[1][0] = "Super Mario";
$jogos[1][1] = "Sonic";
$jogos[1][2] = "Naruto";
$jogos[1][3] = "Zelda";
$jogos[1][4] = "Call of Duty";
// Filmes;
$filmes[2][0] = "Velocidade furiosa 10";
$filmes[2][1] = "Transforms";
$filmes[2][2] = "Batman";
$filmes[2][3] = "Super Homem";
$filmes[2][4] = "Homem Aranja";
//pessoa;
$pessoa [3][0] = "Benilson Abel"; 
$pessoa [3][1] = "Julho barros"; 
$pessoa [3][2] = "Fernanda Rodrigues"; 
$pessoa [3][3] = "Leonel Augusto"; 
$pessoa [3][4] = "Divino Seleste"; 
//print_r($carros);
echo current($pessoa);
echo "<br>";
echo end($filmes);

?>
</pre>

