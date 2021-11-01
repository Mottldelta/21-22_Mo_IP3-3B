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

//příklad funkce s argumentem - jmeno, datum, místo

function jmendatmist(string $jmeno, int $datum, string $misto) {
    echo $jmeno . " se narodil v roce " . $datum . " ve městě " . $misto . "<br>";
}

/*jmendatmist("Jan", 1989,"Pardubice");
jmendatmist("Petra", 2001,"Hradec Králové");*/

// Funkce s argumentem - datový typ - datový typ výsledku

function nasobení(float $e, float $f) : int{
     $g = $e * $f;
     return (int) $g;
}

//echo nasobení(1.2,3.2);
//echo nasobení(5.2,6.6);

//Pole zopakování syntaxe

$pole = array(1, "Petr", 2.5, 2);
//echo $pole[2];
//echo count($pole);
//var_dump($pole);

//Asoc. pole

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
//echo $age["Peter"];

//Cyklus Foreach
    $auto = array("BMW", "Volvo", "Mercedes", "Toyota");
    /*foreach ($auto as $value) {
        echo $value . "<br>";
    }*/


//Asoc. pole výpis pomocí foreach

/*
foreach ($age as $x => $value) {
    echo $x . " je starý ". $value . " let<br>";
} */

//Multidimenzonální pole

$admin = array(array("Petr", 20, "Čech", "Pardubice"),
    array("Petra", 19, "Slovenka", "Trenčíně"),
    array("Peter", 20, "Američan", "New York"));

echo $admin[1][2];
echo $admin[2][3];
echo $admin[2][2];
?>

