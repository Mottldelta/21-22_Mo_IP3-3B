<?php
$adresaimg = "https://image.shutterstock.com/image-vector/bank-icon-logo-vector-260nw-399995245.jpg";
echo "<img src=" . $adresaimg . ">";
echo "<h1>Administrátor banky 3000</h1>";
$adress = "vloznahod.php";
echo "<a href= ". $adress . ">Vložit náhodného zákazníka banky</a>" . "<br>";
$adress2 = "seznam.php";
echo "<a href= ". $adress2 . ">Seznam zákazníků banky</a>" . "<br>";
$adress3 = "seznam2.php?country=Spain";
echo "<a href= ". $adress3 . ">Seznam zákazníků banky ze Španělska</a>" . "<br>";
$adress4 = "seznam2.php?country=Austria";
echo "<a href= ". $adress4 . ">Seznam zákazníků banky z Rakouska</a>" . "<br>";
$adress5 = "seznam2.php?country=Australia";
echo "<a href= ". $adress5 . ">Seznam zákazníků banky z Australie</a>" . "<br>";
?>