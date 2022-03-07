<?php
if(!isset($_COOKIE['kliknutí'])) {
    setcookie('kliknutí',0,time()+1000,"/");
    echo "Počet kliknutí je " . $_COOKIE['kliknutí'] . "<br>";
} else {
    echo "Počet kliknutí je " . $_COOKIE['kliknutí'] . "<br>";
}
if(!isset($_COOKIE['deltacoin'])) {
    setcookie('deltacoin',0,time()+1000,"/");
    echo "Počet Delta coinů je " . $_COOKIE['deltacoin'] . "<br>";
} else {
    echo "Počet Delta coinů je " . $_COOKIE['deltacoin'] . "<br>";
}
if(!isset($_COOKIE['megacoin'])) {
    setcookie('megacoin',0,time()+1000,"/");
    echo "Počet Mega coinů je " . $_COOKIE['megacoin'] . "<br>";
} else {
    echo "Počet Mega coinů je " . $_COOKIE['megacoin'] . "<br>";
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
if($_COOKIE['kliknutí'] >= 50) {
    $click2 = $_COOKIE['kliknutí'] -50;
    setcookie('kliknutí',$click2,time()+1000,"/");
    $coin = $_COOKIE['deltacoin'] + 1;
    setcookie('deltacoin',$coin,time()+1000,"/");
}
if($_COOKIE['deltacoin'] >= 3) {
    $click2 = $_COOKIE['deltacoin'] -3;
    setcookie('deltacoin',$click2,time()+1000,"/");
    $coin = $_COOKIE['megacoin'] + 1;
    setcookie('megacoin',$coin,time()+1000,"/");
}


?>
