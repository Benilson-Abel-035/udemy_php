<?php

echo "Fixando function setLocale<hr>";
// linha de comando para definir a function setLocale(LC_ALL,"","",""): serve para definir o idioma e as suas propriedades; 
setlocale(LC_ALL, "pt_BR", "pt_BR_utf-8", "portuguese");
// linha de comando para definir function strftime(""): server para definir os dias da semana e mes ano, date ect;  
echo "Dia da semana: ".ucfirst(strftime("Hoje é dia %e do mês de %B do ano %Y."));

?>
