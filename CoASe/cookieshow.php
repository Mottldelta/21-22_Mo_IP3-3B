<?php
//Výpis cookie
echo $_COOKIE['Susenka'];

//chytrý výpis cookie s kontrolou, jestli cookie existuje (je nastavená)
if(!isset($_COOKIE['kolac'])) {
    echo "Cookie koláč není nastavená";
} else {
    echo $_COOKIE['kolac'];
}
?>