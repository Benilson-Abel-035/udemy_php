<pre>
<?php

echo "Fixando array<br><br>";

$frotas = array('mançã', 'Morango', 'Manga',
				'Laranja', 'Maracujam', 'Limão'
);
//print_r($frotas);
//echo "<br>";
//echo prev($frotas);

echo "<br><br>";

//funcao array_push: serve para adicionar uma no campo de array;
// echo($array[0]['']): linha de comando para exibir os campos do array;
$pessoa = array();

array_push($pessoa, $caracter = array(
	'idade' => '21',
	'sexo' => 'M',
	'altura' => 1.89,
	'peso' => '90kg',
	'nacionalidade' => 'Angola'
));

array_push($pessoa, array(
	'data' => '01/11/2012', 
	'idade' => '11',
	'sexo' => 'F',
	'altura' => 1.79,
	'peso' => '100kg',
	'nacionalidade' => 'Angola'
));

print_r($pessoa);
echo"<br>idade:".($pessoa[0]['idade'])."<br>";
echo"Sexo:".($pessoa[0]['sexo'])."<br>";
echo"Altura:".($pessoa[0]['altura'])."<br>";
echo"Peso:".($pessoa[0]['peso'])."<br>";
echo"Nacionalidade:".($pessoa[0]['nacionalidade'])."<br>";
echo "<br><br>...........................<br><br>";
//exit();

echo"<br>idade:".($pessoa[1]['data'])."<br>";
echo"idade:".($pessoa[1]['idade'])."<br>";
echo"Sexo:".($pessoa[1]['sexo'])."<br>";
echo"Altura:".($pessoa[1]['altura'])."<br>";
echo"Peso:".($pessoa[1]['peso'])."<br>";
echo"Nacionalidade:".($pessoa[1]['nacionalidade'])."<br>";

print_r($pessoa);
echo "<br><br>";
// Criando JOSN;
echo "Criando JSON:".$json = json_encode($pessoa);
echo "<br><br>";
//json_decode($arry, true): Incluindo JSON  para tazer o json em forma de array atribui o paramento true;;
$jason_includ = json_decode($json, true);
print_r($jason_includ);
echo "<br><br>!!!!...........................!!!!<br><br>";

unset($pessoa);

if (!isset($pessoa)) {


$pessoa = array(

'Benilson Abel', 
'Julho barros',
'Fernanda Rodrigues', 
'Leonel Augusto',
'Divino Seleste');

print_r($pessoa);
echo "<br><br>";
echo current($pessoa) . "<br>"; // funcao para trazer o primeiroou atual elemento do campo de array
echo next($pessoa). "<br>"; // funcao para trazer o segundo elemento do campo de array
echo current($pessoa). "<br>"; // funcao para trazer o primeiro elemento ou o campo atual de array
echo prev($pessoa). "<br>"; // funcao para voltar no elemento anterior do campo de array;
echo reset($pessoa). "<br>"; // funcao para voltar no primeiro elemento do campo de array;
echo end($pessoa). "<br>"; // funcao para ir no  ultimo elemento do campo de array
echo "-------------------------------". "<br>";
echo prev($pessoa). "<br>"; //
echo current($pessoa). "<br>"; //
echo reset($pessoa). "<br>"; // 
echo next($pessoa). "<br>"; //
echo next($pessoa). "<br>"; //
echo prev($pessoa). "<br>"; //
echo "...............................";
//echo each($pessoa);


};
?>



</pre>