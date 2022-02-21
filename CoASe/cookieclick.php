<?php
if(!isset($_COOKIE['kliknutí'])) {
    setcookie('kliknutí',0,time()+1000,"/");
    echo "Počet kliknutí je " . $_COOKIE['kliknutí'] . "<br>";
} else {
    echo "Počet kliknutí je " . $_COOKIE['kliknutí'] . "<br>";
}
if(!isset($_COOKIE['kachna'])) {
    setcookie('kachna',0,time()+1000,"/");
    echo "Počet kachen je " . $_COOKIE['kachna'] . "<br>";
} else {
    echo "Počet kachen je " . $_COOKIE['kachna'] . "<br>";
}

?>

<html>
<form>
    <button onclick="<?php click() ?>">CLICK</button>
    <button onclick="<?php resett() ?>">RESET</button>
    <button onclick="<?php kacha() ?>" disabled>KUP KACHNU</button>
</form>
</html>

<?php
function click() {
    $click = $_COOKIE['kliknutí'] + 1;
    setcookie('kliknutí',$click,time()+1000,"/");
}
function resett() {
    setcookie('kliknutí',0,time()-1000,"/");
}
function kachan() {
    $click = $_COOKIE['kliknutí'] - 20;
    $kachna = $_COOKIE['kachna'] + 1 ;
    setcookie('kliknutí',$click,time()-1000,"/");
    setcookie('kachna',$kachna,time()-1000,"/");
}

?>
