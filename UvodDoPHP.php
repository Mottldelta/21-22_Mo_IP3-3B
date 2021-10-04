<h1>Můj první PHP skript</h1>
<?php
//Tohle je řádkový komentář
#Tohle je řádkový komentář
/* Tohle
je
komentář
na více řádků
*/
echo "Hello world!<br>";
echo /*komentář uvnitř kodu*/
"hello<br>";

//proměnné
$c = "Hello world";
echo "Chtěl bych vám říct: " . $c . "!<br>";
$x = 7;
$y = 6;
echo $y + $x . "<br>";

//prvni funkce
function nasobeni()
{
    $a = 4;
    $b = 5;
    echo $a * $b . "<br>";
}

nasobeni();

//funkce global
function nasobeni2()
{
    global $x, $y;
    echo $x * $y . "<br>";
}

nasobeni2();

//funkce $GLOBALS
function nasobeni3()
{
    $z = $GLOBALS['x'] * $GLOBALS['y'];
    echo $z . "<br>";
}

nasobeni3();

//funkce statická proměnná

function staticka()
{
    static $p = 0;
    echo $p;
    $p = $p + 2;
}

staticka();
staticka();
staticka();
staticka();


//Echo = print
print "<br>hello!";
echo "<h1>Nadpis</h1>";
echo "Hello ", "world", "!";

//Typy proměnných
$h = "World";
var_dump($h);
var_dump($x);
$f = 52.2;
var_dump($f);

$auta = array("BMW", "Volvo", "Toyota");
var_dump($auta);
echo $auta['0'];

$n = null;
var_dump($n);

//datový typ textový řetězec
$txt = "Hello World! ";
$name = "Steve";
echo strlen($txt) . "<br>";
echo str_word_count($txt) . "<br>";
echo strrev($txt) . "<br>";
echo strpos($txt, "World!") . "<br>";
echo str_replace("Hello", "GoodMorning", $txt) . "<br>";
echo $txt . $name . "<br>";

//úkol
$text = "Hello World! ";
$names = "Steve";
$text .= $names; /* připojí proměnnou $names k proměnné $text*/
echo str_replace("Steve", "Jan", $text);

//datový typ integer
$o = 1.;
var_dump(is_float($o));
$int_cast = (int)$o;
echo $int_cast . "<br>";


//Matematika
echo pi() . "<br>";
$cisla = array(5, 6, 8, 10, 12);
echo min($cisla) . "<br>";
echo max($cisla) . "<br>";

//2. hodina – pokračování v úvodu do PHP

echo "2. hodina – pokračování v úvodu do PHP"
?>



