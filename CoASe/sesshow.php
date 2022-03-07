<?php
session_start();
//vypíše obsah(hodnotu) session na indexu "relace"
echo $_SESSION['relace'];

//vynuluje hodnoty relace
session_unset();
//ukončí session
session_destroy();
?>