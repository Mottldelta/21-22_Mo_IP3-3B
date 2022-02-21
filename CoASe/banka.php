<?php
$uziv = $_POST['pass'];
$password = 'heslo';

if ($uziv === $password) {
    setcookie('uzivatel', 1, time()+200, "/");
}
echo $_COOKIE['uzivatel'];

?>