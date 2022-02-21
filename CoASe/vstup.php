<?php
//Podmínka – pokud je užviatel přihlásen, neboli jestli je setnuté cookie 'uzivatel', pokud je tak je uživatel přihlášen a není potřeba, aby se znova přihlašoval
if(!isset($_COOKIE['uzivatel'])) {
    echo "<form action='banka.php' method='post'> <input type='text' name='pass'><input type='submit'></form>";
    } else {
    echo "Není třeba se přihlašovat. Uživatel jest přihlášen";
}
?>
