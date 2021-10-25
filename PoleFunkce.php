<?php declare(strict_types=1);

// připomínka syntaxe
function funkce() {
    echo "Hello World <br>";
}
/*for($i=0;$i<=10;$i++) {
funkce();}*/

//funkce s argumentem
function funkce2($argument1, $argument2) {
    echo $argument1 . $argument2 . "<br>";
}
/*for($i=0;$i<=10;$i++) {
    funkce2($i, $i+1);} */

//funkce s argumentem - jméno a rok narození

function jmenarok($jmeno, $rok) {
    echo $jmeno . " se narodil data: " . $rok . "<br>";
}
/*jmenarok("David", 1989);
jmenarok("Mirka", 2000);*/

//funkce s argumentem - hlídač 18+

function hlidac($jmeno, $rok) {
if (2021-$rok < 18) {
    echo $jmeno . " není mu 18 let! Jeho věk je: " . (2021-$rok) . "<br>";
} else {
    echo $jmeno . " je mu 18 let! Jeho věk je: " . (2021-$rok) . "<br>";
}
}
/*hlidac("Ludvík", 2005);
hlidac("Karel", 1998);*/

//funkce s argumenty - datové typy - špatně

function jmenarok2(string $jmeno, int $rok) {
    echo $jmeno . " se narodil data: " . $rok . "<br>";
}
// jmenarok2("David", 25);

function scitacka(int $a, int $b) {
    $z = $a + $b;
    return $z;
}

/*echo "Součet čísel: " . scitacka(8,16) . "<br>";
echo "Součet čísel: " . scitacka(1,2) . "<br>";*/
?>

