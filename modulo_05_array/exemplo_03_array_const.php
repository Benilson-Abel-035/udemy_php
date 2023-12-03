<?php

echo "FIxandd os conceitos de array constante";

echo "Fixando uma constante<br>";
define("SERVIDOR","127.0.0.1");
echo "<br>";
echo SERVIDOR;
echo "<br>";
echo "<br>";

echo "Fixando array constante<br><br>";
define("BANDO_DADO", [

'127.0.0.1',
'root',
'password',
'croud_cadastro_login',

]);
print_r(BANDO_DADO);
echo "<br><br> Mais exemplos<br>";

//linha de comando para exibir a versao do php; 
echo PHP_VERSION."<br>";

//linha de comando para exibir o diretorio;
echo DIRECTORY_SEPARATOR;


?>