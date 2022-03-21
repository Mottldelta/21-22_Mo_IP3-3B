<?php
//readfile('text.txt');

//otveřit pro čtení
$soubor = fopen("text.txt","r");
//čtení z otevřeného souboru
echo fread($soubor,1);
//číst jeden řádek z otevřeného souboru.
echo fgets($soubor);
echo fgets($soubor);
//čtení soubor po řádcích až do konce samotného souboru
/*while(!feof($soubor)){
    echo fgets($soubor);
}*/
//čtení souboru po znaku
while(!feof($soubor)) {
    echo fgetc($soubor);
}
//zavířt soubor
fclose($soubor);

//soubor otevřít pro psaní
$soubor2 = fopen("text.txt","w");
//psaní do souboru
fwrite($soubor2,"Ahoj Lukáši\nAhoj Davide\n");
//zavířt soubor
fclose($soubor2);

//Pro přepis nutný jiný mód
$soubor3 = fopen("text.txt","a");
fwrite($soubor3,"Ahoj Lukáši\nAhoj Davide");
fclose($soubor3);

?>