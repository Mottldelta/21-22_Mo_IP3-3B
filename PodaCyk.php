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
//funkceif();

//úkol hodiny

function hodiny()
{
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
}
//hodiny();

//ukol podmínka "je číslo dělitelné dvěma, případně třemi"

function deleni()  {
    $x = rand(0,10);
    if (($x % 2) == 0) {
        if (($x % 3) == 0) {
            echo "Číslo ". $x . " Je dělitelné 2 a 3 bez zbytku!";
        } else {
            echo "Číslo ". $x . " Je dělitelné 2 bez zbytku!";
        }
    } else {
        if (($x % 3) == 0) {
            echo "Číslo ". $x . " Je dělitelné 3 bez zbytku!";
        } else {
            echo "Číslo ". $x . " Není dělitelné 3, ani 2 bez zbytku!";
        }
    }
}
//deleni();

//Podmínka – Switch

function switch1() {
    $x = "okurka";

    switch($x) {
        case "lev":
            echo "V Zoo je lev!";
            break;
        case "žralok":
            echo "V Zoo je žralok!";
            break;
        case "leopard":
            echo "V Zoo je leopard!";
            break;
        case "opice":
            echo "V Zoo je opice!";
            break;
        default:
            echo "V Zoo není žádné zvíře";
            break;
    }
}

//switch1();

//Podmínka Switch – hodiny

function switchhodiny() {
    $x = date("H");

    switch ($x) {
        case $x <= 8:
            echo "Dobré ráno";
            break;
        case $x >= 9 and $x <= 12:
            echo "Dobré dopoledne";
            break;
        case $x >= 13 and $x <= 18:
            echo "Dobré odpoledne";
            break;
        case $x >= 19:
            echo "Dobrou noc";
            break;
    }
}

// switchhodiny();

//Cyklus – While

function cykluswhile() {
    $x = 0;

    while($x < 6) {
        echo $x;
        $x++;
    }
}
//cykluswhile();

//Cyklus – While

function cyklusdowhile()
{
    $x = 0;
    do {
        $x++;
        echo $x;
    } while ($x < 6);
}

//cyklusdowhile();

//Cyklus - While - úkol počítadlo násobků dvou
function pocitadlo() {
    $x = 2;
    while ($x < 100) {
        echo $x . "<br>";
        $x = $x + 2;
    }
}
//pocitadlo();

//Cyklus For
function forpocitadlo() {
    for($i = 0; $i < 100; $i+=2) {
        echo $i . "<br>";
    }
}
// forpocitadlo();

//Cyklus Foreach
function foreachpoc() {
    $auto = array("BMW", "Volvo", "Mercedes", "Toyota");

    foreach ($auto as $value) {
        echo $value . "<br>";
    }
}
//foreachpoc();

//Cyklus Foreach asoc. pole
function foreachpoc1() {
    $auto = array("auto1" => "BMW", "auto2" =>  "Volvo", "auto3" => "Mercedes",  "auto4" => "Toyota");

    foreach ($auto as $x => $value) {
        echo $x . " je ". $value . "<br>";
    }
}
// foreachpoc1();


//Cyklus Foreach asoc. pole - ukol věk
function foreachpoc2() {
    $vek = array("Jan" => 18, "Ondřej" =>  21, "Pepa" => 40,  "Gustav" => 12);

    foreach ($vek as $x => $value) {
        echo $x . " je starý ". $value . " let<br>";
    }
}
//foreachpoc2();

//Cyklus - for a break
function stastnychsedm() {

  for($i=1; $i <= 7; $i++) {
      $pytel = rand (0,7);
      echo $i . ". Kolo se vytáhlo číslo: ". $pytel. "<br>";
      if ($pytel == 7) {
          break;
      }
  }
}
// stastnychsedm();

//Cyklus - for a continue
function stastnychsedm1() {
    $sedm = 0;
    for($i=1; $i <= 7; $i++) {
        $pytel = rand (0,7);
        if ($pytel == 7) {
            $sedm++;
            echo "SEDM!". "<br>";
            continue;
        }
        echo $i . ". Kolo se vytáhlo číslo: ". $pytel. "<br>";

    }
    echo "Celkově bylo vytaženo číslo 7: ". $sedm . "krát";
}
//stastnychsedm1();

// ukol 1. (viz prezentace)
function ukol1() {
    $x = rand(0,100);
    $y = rand(0,100);
    $min = 0;
    $max = 0;
    $pojistka = 0;
    $pole = array();

    if ($x > $y) {
        $min = $y;
        $max = $x;
    } else {
        $min = $x;
        $max = $y;
    }
    if ($min == $max) {
        $pojistka++;
    }

    if ($pojistka == 1) {
        echo "Rozmezí je 0, takže cyklus nemá smysl provádět!";
    } else {
        $i = 0;
        for($min; $min <= $max; $min++) {
            $pole[$i] = $min;
            $i++;
        }
    }
    var_dump($pole);
}
//ukol1();

// ukol 1. (viz prezentace) - obměna
function ukolv1() {
    $x = rand(0,100);
    $y = rand(0,100);
    $min = 0;
    $max = 0;
    $pojistka = 0;
    $pole = array();

    if ($x > $y) {
        $min = $y;
        $max = $x;
    } else {
        $min = $x;
        $max = $y;
    }
    if ($min == $max) {
        $pojistka++;
    }

    if ($pojistka == 1) {
        echo "Rozmezí je 0, takže cyklus nemá smysl provádět!";
    } else {
        for($i=0; $i <= $max-$min; $i++) {
            $pole[$i] = $min + $i;
        }
    }
    var_dump($pole);
}
// ukolv1();

// ukol 2. (viz prezentace)
function ukol2()
{
    $pole = array();
    $indchyba = rand(0, 100);
    for ($i = 0; $i <= 100; $i++) {
        if ($i == $indchyba) {
            $pole[$i] = 101;
        } else {
            $pole[$i] = $i;
        }
    }

    for ($i = 0; $i <= 100; $i++) {
        if ($pole[$i] == 101) {
            echo "Chyba byla nalezena!";
            break;
        } else {
            echo $pole[$i] . "<br>";
        }
    }
}
// ukol2();

// ukol 3. lichej/sudej index
function ukol3() {
    $pole = array();
    for($i = 0; $i <= 100; $i++) {
        if ($i % 2 == 0) {
            $pole[$i] = 1;
        } else {
            $pole[$i] = "čislo";
        }
    }
    var_dump($pole);
}
//ukol3();

//Uctenka základ
function uctenka() {
    echo "<h2>Učtenka z nákupu </h2>";
    $nakup = array("", "Rohlík", 5, "Pomelo", 10, "Káva", 20, "Houska", 5, "Mandrinka", 15, "Olej", 20, "Sýr", 30, "Šunka", 30, "Mléko", 25, "Pivo", 15, "Rýže", 50, "Těstoviny", 50, "Džus", 40, "Papír", 50, "Kuřecí maso", 100, "Vepřové maso", 120, "Cibule", 25, "Paprika", 40, "Salát", 30, "Kečup", 30, "Rajče", 10, "Tvaroh", 50);
    $pen = 500;
    while ($pen > 0) {
        $zbozi = rand(1,44);
        if ($zbozi % 2 == 0) {
            if ($nakup[$zbozi] > $pen) {
                echo "Nakupčí chtěl koupit: " . $nakup[$zbozi-1] . " což stálo " . $nakup[$zbozi] . " na což neměl dost peněz" . "<br>";
                break;
            } else {
                $pen = $pen - $nakup[$zbozi];
                echo "Nakupčí koupil " . $nakup[$zbozi-1] . " což stálo " . $nakup[$zbozi] . "<br>";
            }
        } else {
            if ($nakup[$zbozi+1] > $pen) {
                echo "Nakupčí chtěl koupit: " . $nakup[$zbozi] . " což stálo " . $nakup[$zbozi+1] . " na což neměl dost peněz" . "<br>";
                break;
            } else {
                $pen = $pen - $nakup[$zbozi+1];
                echo "Nakupčí koupil " . $nakup[$zbozi] . " což stálo " . $nakup[$zbozi+1] . "<br>";
            }
        }
    }
    if ($pen == 0) {
        echo "<b>Děkujeme za nákup, nemáte nic</b>";
    } else {
        echo "<b>Děkujeme za nákup. Zůstatek na účtě je " . $pen . "</b>";
    }
}
//uctenka();

//Uctenka bonus
function uctenkabon()
{
    echo "<h2>Učtenka z nákupu </h2>";
    $nakup = array("", "Rohlík", 5, "Pomelo", 10, "Káva", 20, "Houska", 5, "Mandrinka", 15, "Olej", 20, "Sýr", 30, "Šunka", 30, "Mléko", 25, "Pivo", 15, "Rýže", 50, "Těstoviny", 50, "Džus", 40, "Papír", 50, "Kuřecí maso", 100, "Vepřové maso", 120, "Cibule", 25, "Paprika", 40, "Salát", 30, "Kečup", 30, "Rajče", 10, "Tvaroh", 50);
    $pen = rand(100,1000);
    while ($pen % 5 != 0) {
        $pen = rand(100,1000);
    }
    echo "Obsah peněženky na začátku nákupu je " . $pen . "<br>";
    $i = 0;
    while ($pen > 0) {
        $zbozi = rand(1, 44);
        while ($zbozi % 2 != 0) {
            $zbozi = rand(1, 44);
        }
        if ($nakup[$zbozi] > $pen) {
            continue;
        } else {
            $pen = $pen - $nakup[$zbozi];
            echo "Nakupčí koupil " . $nakup[$zbozi - 1] . " což stálo " . $nakup[$zbozi] . "<br>";
        }
    }
    if ($pen == 0) {
        echo "<b>Děkujeme za nákup, nemáte nic</b>";
    } else {
        echo "<b>Děkujeme za nákup. Zůstatek na účtě je " . $pen . "</b>";
    }
}
uctenkabon();
?>
