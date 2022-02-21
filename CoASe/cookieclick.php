<?php
if(!isset($_COOKIE['klik'])) {
    setcookie('klik',0,time()+1000,"/");
    echo "Počet kliknutí je " . $_COOKIE['klik'] . "<br>";
} else {
    echo "Počet kliknutí je " . $_COOKIE['klik'] . "<br>";
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
    $click = $_COOKIE['klik'] + 1;
    setcookie('klik',$click,time()+1000,"/");
}
function resett() {
    setcookie('klik',0,time()-1000,"/");
}
function kachan() {

}
?>
