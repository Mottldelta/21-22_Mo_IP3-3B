<?php
session_start();
$user = "username";
$pass = 12345;

$zadjmeno = $_POST['jmeno'];
$zadheslo = $_POST['heslo'];

if ($zadjmeno == $user and $zadheslo == $pass) {
    echo "Přihlásil jste se!";
    $_SESSION['login'] = 1;
} else {
    echo "špatné přihlašovací údaje";
}
?>