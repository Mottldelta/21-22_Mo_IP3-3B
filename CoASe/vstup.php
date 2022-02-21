<?php
if(!isset($_COOKIE['uzivatel'])) {
    echo "<form action='banka.php' method='post'> <input type='text' name='pass'><input type='submit'></form>";
    } else {
    echo "Není třeba se přihlašovat. Uživatel jest přihlášen";
}
?>
