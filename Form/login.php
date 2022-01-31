<?php
$user = "Ondra";
$password = "hobliny";

$zadanejmeno = $_POST['zakazjmen'];
$zadaneheslo = $_POST['zakazheslo'];

if($zadanejmeno === $user and $zadaneheslo === $password) {
    echo "Vítejte!";
} else {
    echo "Špatné údaje!";
}
?>