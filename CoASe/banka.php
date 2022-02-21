<?php

$uziv = $_POST['pass'];
$password = 'heslo';

//Pokud to, co napsal uživatel se rovná heslu, tak se nastaví cookie, že je přihlásen
if ($uziv === $password) {
    setcookie('uzivatel', 1, time()+200, "/");
}
?>