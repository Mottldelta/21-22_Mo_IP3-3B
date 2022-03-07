<?php
session_start();
echo "Nashledanou ".$_SESSION['login'];
session_destroy();
?>