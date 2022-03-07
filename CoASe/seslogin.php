<?php
session_start();
if(isset($_SESSION['login'])) {
    echo "Jste přihlášen " . $_SESSION['login'];
    echo "<form action='sesexit.php'><input type='submit' value='Odhlásit'></form>";
}
?>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>HMTL Form</title>
</head>
<body>
<form action="sescheck.php" method="post" <?php if(isset($_SESSION['login'])) {echo "hidden";} ?>>
    <h1>Login</h1>
    <!--    Label s textovým polem-->
    <label for="custname">Jméno: </label>
    <input type="text" name="jmeno" id="custname" placeholder="Napiš své jméno" autofocus> <br>
    <!--        Heslo-->
    <label for="custpass">Heslo: </label>
    <input type="password" id="custpass" name="heslo">
    <br>

    <!--    Tlačítko pro odeslání formuláře-->
    <input type="submit" value="Přihlásit" <?php if(isset($_SESSION['login'])) {echo "disabled";} ?>>
    <br>
</form>

</body>
</html>
