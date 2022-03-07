<?php
session_start();
if(isset($_SESSION['login'])) {
    echo "Jste přihlášen";
}
?>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>HMTL Form</title>
</head>
<body>
<h1>Login</h1>
<form action="sescheck.php" method="post">
    <!--    Label s textovým polem-->
    <label for="custname">Jméno: </label>
    <input type="text" name="jmeno" id="custname" placeholder="Napiš své jméno" autofocus> <br>
    <!--        Heslo-->
    <label for="custpass">Heslo: </label>
    <input type="password" id="custpass" name="heslo">
    <br>

    <!--    Tlačítko pro odeslání formuláře-->
    <input type="submit">
    <br>
</form>

</body>
</html>
