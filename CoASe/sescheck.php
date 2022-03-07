<?php
session_start();
$user = "jan";
$pass = 12345;

$zadjmeno = $_POST['jmeno'];
$zadheslo = $_POST['heslo'];

if ($zadjmeno == $user and $zadheslo == $pass) {
    echo "Vítejte ".$_SESSION['login'];
    $_SESSION['login'] = $zadjmeno;
} else {
    echo "špatné přihlašovací údaje";
}
?>