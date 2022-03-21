<?php
//readfile('text.txt');

//otveřit
$soubor = fopen("text.txt","r");
//čtení z otevřeného souboru
echo fread($soubor,1);
//číst jeden řádek z otevřeného souboru.
echo fgets($soubor);
echo fgets($soubor);
//zavířt
fclose($soubor);
?>