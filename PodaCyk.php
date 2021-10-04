<?php

function funkceif()
{
    $a = 10;
    $b = 10;

//if s logickým opetátorem or

    if ($a > $b or $a == $b) {
        echo "A je větší než B, nebo A se rovná B <br>";
    }

//if s else

    if ($a > $b) {
        echo "A je větší než B <br>";
    } else {
        echo "A není větší než B, nebo se A a B rovnají <br>";
    }

//if a elseif

    if ($a > $b) {
        echo "A je větší než B <br>";
    } elseif ($a == $b) {
        echo "A a B rovnají <br>";
    } else {
        echo "B je větší než A<br>";
    }
}

//úkol hodiny
echo date("H") . "<br>";
echo date("s") . "<br>";

if (date("H") >= 12) {
    if (date("s") <= 31) {
        echo "Dobré odpoledne, pane";
    } else {
        echo "Dobré odpoledne, paní";
    }
} else {
    if (date("s") <= 31) {
        echo "Dobré dopoledne, pane";
    } else {
        echo "Dobré dopoledne, paní";
    }
}

?>
