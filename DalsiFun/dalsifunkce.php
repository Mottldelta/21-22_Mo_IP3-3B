<?php

//Datum a čas
date_default_timezone_set('Europe/Prague');
echo date('Y.d.m.');
echo "<br>";
echo date('h:i:sa');
echo "<br>";

//Include
include 'include.php';
echo $a;
echo "<br>";

//Hash
$heslo = "tajneheslo123";
$hash = hash('sha512',$heslo,"afri1123");
if(hash('sha512',$heslo,"afri1123") == $hash) {
    echo "Heslo se shoduje se záznamem v databázi!";
} else {
    echo "Hesla se neshodují!";
}
echo "<br>";

//Password hash
$heslo2 = "tajnesuperheslo12345";
$hash2 = password_hash($heslo2,PASSWORD_DEFAULT);
if(password_verify($heslo2,$hash2)) {
    echo "hesla se shodují";
} else {
    echo "hesla se neshodují";
}

?>