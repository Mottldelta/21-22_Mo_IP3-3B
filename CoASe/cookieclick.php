<?php
if(!isset($_COOKIE['kliknutí'])) {
    setcookie('kliknutí',0,time()+1000,"/");
    echo "Počet kliknutí je " . $_COOKIE['kliknutí'] . "<br>";
} else {
    echo "Počet kliknutí je " . $_COOKIE['kliknutí'] . "<br>";
}


?>

<html>
<form>
    <button onclick="<?php click() ?>">CLICK</button>
</form>
</html>

<?php
function click() {
    $click = $_COOKIE['kliknutí'] + 1;
    setcookie('kliknutí',$click,time()+1000,"/");
}


?>
